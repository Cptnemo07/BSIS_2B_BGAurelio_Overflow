<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meeting Schedule</h1>
    <table>
      <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
        <th>Agenda</th>
      </tr>
      <?php
        // Define an array of meetings
        $meetings = array(
          array("date" => "March 15, 2023", "time" => "10:00am - 11:00am", "location" => "Conference Room A", "agenda" => "Discuss project status"),
          array("date" => "March 22, 2023", "time" => "2:00pm - 3:00pm", "location" => "Conference Room B", "agenda" => "Brainstorm new ideas"),
          array("date" => "March 29, 2023", "time" => "9:00am - 10:00am", "location" => "Online", "agenda" => "Present findings to stakeholders")
        );
        
        // Loop through the array and generate a row for each meeting
        foreach ($meetings as $meeting) {
          echo "<tr>";
          echo "<td>" . $meeting['date'] . "</td>";
          echo "<td>" . $meeting['time'] . "</td>";
          echo "<td>" . $meeting['location'] . "</td>";
          echo "<td>" . $meeting['agenda'] . "</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>