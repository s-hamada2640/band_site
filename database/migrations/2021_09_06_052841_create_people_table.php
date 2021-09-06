<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreatePersonTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("person", function (Blueprint $table) {
						$table->increments('id');
						$table->string('username',50);
						$table->string('email',255);
						$table->bigIncrements('password');
						$table->smallIncrements('area1');
						$table->smallIncrements('part1');
						$table->smallIncrements('level1');
						$table->string('favorite',30);
						$table->tinyIncrements('age');
						$table->tinyInteger('sex')->nullable();
						$table->text('activity1')->nullable();



						// ----------------------------------------------------
						// -- SELECT [person]--
						// ----------------------------------------------------
						// $query = DB::table("person")
						// ->get();
						// dd($query); //For checking



                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("person");
                }
            }
        