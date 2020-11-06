<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // an auto incrementing column with a name of id, primary key
            $table->string('building_name'); // varchar(45) column name of Building_Name
            $table->string('locker_floor')->unique(); // varchar (45) column name of locker floor, attribute of unique
            $table->timestamp('rent_sdate')->unique(); //timestamp type(45) column name of rent sdate. attribute of unique
            $table->timestamp('rent_edate')->unique(); // timestamp type (45) column name of rent edate, attribute of unique
            $table->timestamp('reservatin_status')_->unique(); // timestamp type column name of edate, attribute of unique
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); // this will create two timestamp columns, created_at and updated_at 
            //created_at -> filled up if the record is created
            //updated_at -> filled up if the record is updated
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
