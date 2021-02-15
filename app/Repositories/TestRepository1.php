<?php
namespace App\Repositories;
use App\Models\Test;

class TestRepository1 implements TestInterface {
    public function all(){
        return Test::get();
    }
    public function get($id){
        return Test::find($id);
    }
    public function store(array $data){
        return Test::create($data);
    }
    public function update($id, array $data){
        return Test::find($id)->update($data);
    }
    public function delete($id){
        return Test::destroy($id);
    }
}