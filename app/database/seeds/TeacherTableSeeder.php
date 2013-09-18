<?php

class TeacherTableSeeder extends Seeder {
    public function run() {

        DB::table('teachers')->delete();
        $extra = array('subjects'=>array('M','E','S'));
        $extra = serialize($extra);
        Teacher::create(array('user_id' => 1,'username'=>'johndoe', 'email' => 'johndoe@example.com', 'dob' => '1996-01-01', 'extra' => $extra));
    }

}
