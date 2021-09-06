<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

    
    //=======================================================================
    class PersonController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $people = Person::query();
            $perPage = 25;
    
            if (!empty($keyword)) {
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [person]--
				// ----------------------------------------------------
				$people->orWhere("people.username", "LIKE", "%$keyword%")
                        ->orWhere("people.email", "LIKE", "%$keyword%")
                        ->orWhere("people.password", "LIKE", "%$keyword%")
                        ->orWhere("people.area1", "LIKE", "%$keyword%")
                        ->orWhere("people.part1", "LIKE", "%$keyword%")
                        ->orWhere("people.level1", "LIKE", "%$keyword%")
                        ->orWhere("people.favorite", "LIKE", "%$keyword%")
                        ->orWhere("people.age", "LIKE", "%$keyword%")
                        ->orWhere("people.sex", "LIKE", "%$keyword%")
                        ->orWhere("people.activity1", "LIKE", "%$keyword%")
                        ->select("*")->addSelect("people.id")->paginate($perPage);
            }
            
            $person = $people->get();

            return view("people.index", compact("person"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("people.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"username" => "required|max:50", //string('username',50)
				"email" => "required|max:255", //string('email',255)
				"favorite" => "required|max:30", //string('favorite',30)
				"sex" => "nullable", //tinyInteger('sex',10)->nullable()
				"activity1" => "nullable", //text('activity1')->nullable()

            ]);
            $requestData = $request->all();
            
            Person::create($requestData);
    
            return redirect("people")->with("flash_message", "person added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            $people = Person::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [person]--
				// ----------------------------------------------------
				// $people->select("*")->addSelect("people.id")->where("people.id",$id)->first();
            return view("people.show", compact("person"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $people = Person::findOrFail($id);
    
            return view("people.edit", compact("person"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"username" => "required|max:50", //string('username',50)
				"email" => "required|max:255", //string('email',255)
				"favorite" => "required|max:30", //string('favorite',30)
				"sex" => "nullable", //tinyInteger('sex',10)->nullable()
				"activity1" => "nullable", //text('activity1')->nullable()

            ]);
            $requestData = $request->all();
            
            $people = Person::findOrFail($id);
            $people->update($requestData);
    
            return redirect("people")->with("flash_message", "people updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            Person::destroy($id);
    
            return redirect("people")->with("flash_message", "people deleted!");
        }
    }
    //=======================================================================