<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\ZoneLocation;
class ZoneController extends Controller
{
    //
    public function getzone(Request $request)
    {
        $zones_details = Zone::paginate(env("RECORDS_PER_PAGE"));
        return view('admin.zones.all_zones', compact('zones_details'));
    }
    public function addZone(Request $request)
    {
        
        $request->validate(['zone_name' => 'required', 'zone_description' => 'required', 'shipping_cost' => 'required', 'weight_margin' => 'required', 'minimum_cost' => 'required','zip_code' => 'required']);
        Zone::create($request->all());
        return back()
            ->with('success', 'Zone Submitted');
    }
    public function updateZone(Request $request)
    {
        $zone = Zone::find($request->zone_id);
        if ($zone != null)
        {
            $zone->zone_name = $request->input('zone_name');
            $zone->zone_description = $request->input('zone_description');
            $zone->shipping_cost = $request->input('shipping_cost');
            $zone->weight_margin = $request->input('weight_margin');
            $zone->minimum_cost = $request->input('minimum_cost');
            $zone->zip_code = $request->input('zip_code');
            $zone->save();
            return back()
                ->with('success', 'zone updated successfully !');
        }
        else
        {
            return back()
                ->with('error', 'Could not find the zone');
        }
    }
    public function removeZone(Request $request)
    {
        $zone = Zone::where('id', $request->zone_id)->get()->first();

        if ($zone != null)
        {
            $zone = Zone::where('id', $request->zone_id)->delete();
            return back()->with('success', 'Site zone removed successfully !');
        }
        else
        {
            return back()->with('error', 'Could not find the site zone');
        }
    }


    public function getLocation(Request $request){
        
            $location_details = ZoneLocation::with('zone')->paginate(env("RECORDS_PER_PAGE"));
            $searchKey = $request->searchKey;
            $location_details = ZoneLocation::getLocationForSearchKey($searchKey);
            $zones = Zone::all();
            return view('admin.zones.all_locations', compact('location_details','zones','searchKey'));
    }


    public function addLocations(Request $request)
    {
        $request->validate(['location_name' => 'required', 'location_description' => 'required']);
        ZoneLocation::create($request->all());
        return back()->with('success', 'Zone location Submitted');
    }


    public function updateZoneLocation(Request $request)
    {
        $zone_location = ZoneLocation::find($request->zone_id);
        if ($zone_location != null)
        {

            $zone_location->location_name = $request->input('location_name');
            $zone_location->location_description = $request->input('location_description');

            $zone_location->save();
            return back()
                ->with('success', 'Zone Location updated successfully !');
        }

        else
        {
            return back()
                ->with('error', 'Could not find the Zone Location');
        }
    }

    public function removeLocationZone(Request $request)
    {
        $zone_location = ZoneLocation::where('id', $request->zone_id)
            ->get()
            ->first();
        if ($zone_location != null)
        {
            $zone_location = ZoneLocation::where('id', $request->zone_id)
                ->delete();
            return back()
                ->with('success', 'Site Zone Location removed successfully !');
        }
        else
        {
            return back()
                ->with('error', 'Could not find the site Zone Location');
        }
    }









}

