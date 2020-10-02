<?php

namespace App\Http\Controllers;

use MongoDB;
use Illuminate\Http\Request;
use MongoDB\Operation\FindOne;

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
        return view('dimasol.calendarapp.index', ['projects' => $projects, 'projectCount' => $projectCount]);
    }

    public function DetailsMaster($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('dimasol.calendarapp.detailsmaster', ['project' => $project]);
    }

    public function Delete($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('dimasol.calendarapp.delete', ['project' => $project]);
    }

    public function Remove()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $deleteOneResult = $collection->deleteOne(
            ["_id" => new \MongoDB\BSON\ObjectId(request('projectid'))]
        );
        return redirect('/calendar/index');
    }

    public function Create()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $projects = $collection->find();
        return view('dimasol.calendarapp.create', ["Projects"=>$projects]);
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
            "startDate" => request("startDate"),
            "endDate" => request("endDate"),
            "requisitedBy" => request("requisitedBy"),
            "consumables" => request("consumables"),
        ];
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $insertOneResult = $collection->insertOne($project);
        return redirect("/calendar");
    }

    public function Edit($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('dimasol.calendarapp.edit', [
            "projectName" => $projectName,
            "description" => $description,
            "company" => $company,
            "area" => $area,
            "startDate" => $startDate,
            "endDate" => $endDate,
            "requisitedBy" => $requisitedBy,
            "consumables" => $consumables
        ]);
    }

    public function Update()
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = [
            "projectName" => request("projectName"),
            "description" => request("description"),
            "company" => request("company"),
            "area" => request("area"),
            "startDate" => request("startDate"),
            "endDate" => request("endDate"),
            "requisitedBy" => request("requisitedBy"),
            "consumables" => request("consumables"),
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("projectid"))
        ], [
            '$set' => $project
        ]);
        // if ($updateOneResult->getModifiedCount() == 1)
        //     return redirect(route('GameUpdated'))->with('mssg', "Game updated")->with("alerttype", "success");
        // else
        //     return redirect(route('GameUpdated'))->with('mssg', "Update unsuccesful. Try again later.")->with("alerttype", "warning");
        return redirect('/calendar' . request("projectid"));
    }

    public function UserDetails($id)
    {
        $collection = (new MongoDB\Client)->DIMASOL->Projects;
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectID($id)]);
        return view('calendarapp.detailsuser', ["project" => $project]);
    }
}
