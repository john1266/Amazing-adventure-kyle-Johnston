<?php 
$rooms = [

  "Room 1" => [
    "description" => "This is room 1",
    "actions" => [
      "room 3" => "North",
      "room 2" => "East"
      ]
    ],

    "Room 2" => [
      "description" => "This is room 2",
      "actions" => [
        "room 1" => "West"
        ]
      ],

      "Room 3" => [
        "description" => "This is room 3",
        "actions" => [
          "room 6" => "North",
          "room 1" => "South"
          ]
        ],
    
        "Room 4" => [
          "description" => "This is room 4",
          "actions" => [
            "room 8" => "East",
            "room 2" => "South",
            "room 3" => "West"
            ]
          ],
      
          "Room 5" => [
            "description" => "This is room 5",
            "actions" => [
              "room 7" => "East",
              "room 4" => "South",
              "room 3" => "West"
              ]
            ],

            "Room 6" => [
              "description" => "This is room 6",
              "actions" => [
                "room 5" => "East",
                "room 3" => "South"
                ]
              ],

              "Room 7" => [
                "description" => "Well looks like you failed eh.",
                "actions" => [
                  "room 1" => "Start over",
                  ]
                ],
  
            "Room 8" => [
              "description" => "This is room 8",
              "actions" => [
                "room 7" => "North",
                "room 9" => "South"
                ]
              ],

              "Room 9" => [
                "description" => "This is room 9",
                "actions" => [
                  "room 8" => "North",
                  "End" => "South",
                  "room 2" => "West"
                  ]
                ],

                "End" => [
                  "description" => "You did it and are less of a failure now!",
                  "actions" => [
                    "room 1" => "Start over"
                    ]
                  ]
                ];

  if(isset($_GET["room"]) && isset($rooms[$_GET["room"]])){

  $room = $rooms[$_GET["room"]];
  } 
  else {$room = $rooms["Room 1"]; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>aMAZing Adventures</title>
  <link rel="stylesheet" href="adventure.css">
</head>
<body>

  <div class="response"><?php echo $room["description"]; ?></div>
  <div class="actions">
<?php 
  foreach ($room["actions"] as $d => $r):
?>
    <a href="?room=<?php echo $r; ?>" class="action"><?php echo $d; ?></a>
  <?php endforeach ?>
  
</body>
</html>