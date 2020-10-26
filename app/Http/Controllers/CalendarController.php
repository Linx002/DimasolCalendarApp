<?php

namespace App\Http\Controllers;

use MongoDB;
use Illuminate\Http\Request;
use MongoDB\Operation\FindOne;
use App\Controllers\input;
use Javascript;

class CalendarController extends Controller
{
    public function Index()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $projectCount = $collection->count();
        $pagina = request("pag") == 0 ? 1 : request("pag");
        $projects = $collection->find([], ["limit" => 10, "skip" => ($pagina - 1) * 10]);
        $startDatevar = $collection->find(['startDate']);
        $endDatevar = $collection->find(['endDate']);
        return view('calendarapp.index', ['projects' => $projects, 'projectCount' => $projectCount]);
    }

    public function Delete($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('calendarapp.delete', ['project' => $project]);
    }

    public function Remove()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $deleteOneResult = $collection->deleteOne(["_id" => new \MongoDB\BSON\ObjectId(request('projectid'))]);
        return redirect('/calendar/index')->with('msg','Proyecto borrado correctamente!')->with("alerttype", "danger");
    }

    public function Create()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $projects = $collection->find();
        return view('calendarapp.create', ["Projects"=>$projects]);
    }

    //to store/edit/delete
    // "name of column" => request("id in blade.php")

    public function Store()
    {
        $project = [
            "projectName" => request("projectName"),
            "description" => request("description"),
            "company" => request("company"),
            "area" => request("area"),
            "startDate" =>request("startDateVar"),
            "endDate" => request("endDateVar"),
            "requisitedBy" => request("requisitedBy"),
            "consumables" => request("consumables"),
        ];
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $insertOneResult = $collection->insertOne($project);
        return redirect("/calendar")->with('msg','Proyecto guardado correctamente!')->with("alerttype", "primary");
    }

    public function Edit($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('calendarapp.edit', ['project' => $project]);
    }

    public function Update()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = [
            "projectName" => request("projectName"),
            "description" => request("description"),
            "company" => request("company"),
            "area" => request("area"),
            "startDate" => request("startDatevar"),
            "endDate" => request("endDateVar"),
            "requisitedBy" => request("requisitedBy"),
            "consumables" => request("consumables"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("projectid"))
        ], [
            '$set' => $project
        ]);
        return redirect('/calendar')->with('msg','Proyecto editado correctamente!')->with("alerttype", "primary");
    }

    public function UserDetails($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('calendarapp.detailsuser', ["project" => $project]);
    }
     public function DetailsMaster($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('calendarapp.detailsmaster', ['project' => $project]);
    }
}
