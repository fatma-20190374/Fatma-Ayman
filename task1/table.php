<?php
// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [  //users array of objects
    (object)[   // associated array
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[  //gender array of object
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [      // associated array
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'phones'=>[012312312,1231513513,89746543],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[1231513513,89746543],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[],
    ],  
    (object)[
        'id' => 3,
        'name' => 'omar',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming',
        ],
        'activities' => [
            
        ],
        'phones'=>[333333],
    ],  
    
];
?>

<?php
function table (array $users) :?string {

            
           $table =    " <table>
                    <thead>
                        <tr>"; 
            foreach($users[0] as $userKeys => $userValues){ 
              $table .= " <th> $userKeys </th> ";
            } 
            $table .= "</tr> 
            </thead>
            <tbody> ";
            
            
                foreach($users as $user){ 
                    $table .= "<tr>" ;
                    foreach ($user as $userKeys => $userValues){ 
                        $table .= "<td>" ;
                        if(gettype($userValues) =='array' || gettype($userValues) =='object'){
                            
                                foreach($userValues as $key => $value){
                                    if($userKeys=='gender' && $key=='gender'){
                                        if ($value=='m'){
                                            $value= 'male';
                                        }
                                        else //if ($value=='f')
                                        {
                                            $value= 'female';
                                        }
                                    }
                                    $table.= $value ."<br>";
                                     
                                }
                            }

                        else {
                            $table .= $userValues ."<br>";
                             }
                        $table .= "</td>";
                            }
                            $table.="</tr>";
                        }
                        $table .=       "</tbody>
                        </table>";
                        return $table;
            }

                
                ?>

<!doctype html>

<style>
    table{
    width: 100%;
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
}
td, tr, th{
    width: 10%;
    border: 1px solid black;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?= table($users) ?>
</body>