<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;
use Bulkly\SocialPostGroups;
use Illuminate\Support\Facades\Auth;
use DB;


class BufferPostingController extends Controller
{
    public function buffer_posting(){
    	$data['groups'] = $groups = DB::table('social_post_groups')
    			->where('social_post_groups.user_id',Auth::user()->id)
                ->join('buffer_postings', 'social_post_groups.id', '=', 'buffer_postings.group_id')
                ->join('social_accounts', 'social_accounts.id', '=', 'buffer_postings.account_id')
                ->select('social_post_groups.name as group_name','social_post_groups.id as id','social_post_groups.type as group_type','buffer_postings.post_text as post_text', 'buffer_postings.created_at as created_at','social_accounts.avatar as avatar')
                ->paginate(10);
    	return view('buffer.index',$data);
    }

    public function group_search(Request $request){
    	$id = $request->id;
    	$group = SocialPostGroups::find($id);    		
    }
}
