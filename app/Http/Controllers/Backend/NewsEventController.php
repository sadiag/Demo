<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\NewsEvent;

class NewsEventController extends Controller
{
    public function view()
    {
        $data['allData'] = NewsEvent::all();
        return view('backend.news_event.view-news_event',$data);
    }
    public function add(){
        return view('backend.news_event.add-news_event');
    }
    
    public function store(Request $request)
    {  
        $data = new NewsEvent();
        $data->date = date('y-m-d',strtotime($request->date));
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/news_images'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('news_events.view')->with('success','Data inserted successfully');

        
    }
    public function edit($id)
    {
        $editData = NewsEvent::find($id);
        return view('backend.news_event.edit-news_event',compact('editData'));
    }

    public function update(Request $request,$id)
    {
        $data = NewsEvent::find($id);
        $data->date = date('y-m-d',strtotime($request->date));
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/news_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/news_images'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('news_events.view')->with('success','Data updated successfully');
    }

     public function delete($id)
    {
        $news_events = NewsEvent::find($id);
        if(file_exists('public/upload/news_images/' . $news_events->image) AND ! empty($news_events->image))
        {
            unlink('public/upload/news_images/' . $news_events->image);
        }
        $news_events->delete();
        return redirect()->route('news_events.view')->with('success','Data updated successfully');
    }
}
