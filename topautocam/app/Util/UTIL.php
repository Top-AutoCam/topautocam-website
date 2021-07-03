<?php
/**
 * author: malinkaphann@gmail.com
 * utility class
 */

namespace App\Util;

use Illuminate\Support\Facades\Response;
use App\Exceptions\InvalidKhmerNumberException;
use App\Exceptions\LeadingZeroFoundException;
use App\Exceptions\MustBeDigitException;
use App\Exceptions\RemainingDigitException;

class UTIL {

    const PROJECT_NAME = "TOP AUTO";
    const DESC = "desc";
    const ASC = "asc";

    const RESULTS_PER_PAGE = 12;

    const CATEGORY = [
        "CAR" => "Car",
        "MOTORBIKE" => "Motorbike",
        "PART" => "Part"
    ];

    const PRODUCT = [
        "ALPHARD" => "Alphard",
        "Q7" => "Q7",
        "E90" => "E90"
    ];

    const COLOR = [
        "WHITE" => "White",
        "BLACK" => "Black",
        "SILVER" => "Silver",
        "GRAY" => "Gray",
        "BLUE" => "Blue",
        "RED" => "Red",
        "BROWN" => "Brown",
        "GOLD" => "Gold", 
        "GREEN" => "Green",
        "TAN" => "Tan",
        "ORANGE" => "Orange",
    ];

    const FUEL = [
        "DIESEL" => "Diesel",
        "GASOLINE" => "Gasoline"
    ];

    const DRIVE = [
        "4WD" => "4WD",
        "FWD" => "FWD",
        "AWD" => "AWD",
        "TWD" => "TWD",
        "2WD" => "2WD",
    ];

    const MAKE = [
        "AUDI" => "Audi",
        "BMW" => "BMW",
        "TOYOTA" => "Toyota",
        "FORD" => "Ford", 
        "MAZDA" => "Mazda", 
        "MERCEDES BENZ" => "Mercedes Benz", 
        "LAND ROVER" => "Land Rover", 
        "PORSCHE" => "Porsche", 
        "CHEROLET" => "Chevrolet",  
        "LEXUS" => "Lexus",
    ];

    const MAKE_BIKE = [
        "HONDA" => "Honda",
        "SUZUKI" => "Suzuki",
    ];

    // add one more field into table model

    // make_id
    
    // data will be like this
    
    // model, make_id
    // q7, audi
    // q5, audi
    
    // this tells that if make = audi, then there are two models: q5 and q7
    // in front end, when user select audi, you query for what models belong to audi from this table

    const MODEL = [
        "ALPHARD" => "Alphard",
        "BMW" => "E90",
        "Q7" => "Q7",
        "HIGHLANDER" => "Highlander", 
        "CAMRY" =>  "Camry", 
        "COROLLA" =>  "Corolla", 
        "VITZ" =>  "Vitz", 
        "GS300" => "GS300", 
        "RX300" => "RX300", 
        "RX330" =>  "RX330", 
        "RX350" =>  "RX350",
    ];

    const MODEL_BIKE = [
        "SL" => "SL",
        "NIGHT_HAWK" => "Night Hawk"
    ];

    const GRADE = [
        "A" => "Grade A",
        "B" => "Grade B",
        "C" => "Grade C"
    ];

    const INVENTORY_STATUS = [
        "IN_STOCK" => "IN STOCK",
        "SOLD" => "SOLD"
    ];

    const PART = [
        "COMPRESSOR" => "Compressor",
        "BRAKE" => "Brake",
        "BRAKE_FLUID" => "Brake Fluid",
        "AIR_FILTER" => "Air Filter",
        "BELT" => "Belt"
    ];

    const SELECTED = [
        "FEATURED" => "Featured",
        "NORMAL" => "Normal"
    ];

}
