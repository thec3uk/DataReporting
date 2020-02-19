<!DOCTYPE html>
<html>

<!-- Page Formatting -->
  <head>
    <title>C3 Data Reporting</title>
    <meta name="Author" content="mia.axtell@outlook.com"/>
    <link rel="stylesheet" href="output.css">
  </head>

<!-- Page Heading -->
  <header class="bg-gray-800 font-montserrat">
    <h1 class="text-6xl text-white text-center">
      C3 Data Reporting
    </h1>
  </header>

<!-- Form Creation to Generate Forms -->
  <body class="bg-gray-800 font-montserrat">
    <form action="Graph.php" target="_blank" method="get" id="graphData" name="GraphData">
      <div class="grid grid-cols-3 gap-4">

        <span> </span>

        <table>

          <thead>
            <tr>
              <th class="text-4xl font-montserrat text-white w-1/3">Ministry</th>
              <th class="text-4xl font-montserrat text-white w-1/3">Session</th>
              <th class="text-4xl font-montserrat text-white w-1/3">Graphs</th>
            </tr>
          </thead>

          <tr>
            <td>
              <div class="felx h-64">
                <table>
                  <tbody>
                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="kids" name="ministry" value="kids">
                        <label for="kids">Kids Church</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="youth" name="ministry" value="youth">
                        <label for="youth">Youth / Shift</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="ya" name="ministry" value="ya">
                        <label for="ya">Young Adults</label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>

            <td height="280">
              <div class="felx h-64">
                <table>
                  <tbody>
                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="weds" name="session" value="weds">
                        <label for="weds">Wednesdsay</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="fri" name="session" value="fri">
                        <label for="fri">Friday</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="sun" name="session" value="sun">
                        <label for="sun">All Sunday</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="930" name="session" value="930">
                        <label for="930">Sunday 9:30</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="1130" name="session" value="1130">
                        <label for="1130">Sunday 11:30</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="1730" name="session" value="1730">
                        <label for="1730">Sunday 5:30</label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>

            <td>
              <div class="felx h-64">
                <table>
                  <tbody>
                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="attendees" name="graph" value="attendance">
                        <label for="kids">Attendees</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="team" name="graph" value="team">
                        <label for="team">Team</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="2018" name="graph" value="2018">
                        <label for="2018">2018 Data</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="month" name="graph" value="month">
                        <label for="month">Monthly Average</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="radio" id="NtC" name="graph" value="NtC">
                        <label for="NtC">New to Church</label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </table>

        <span> </span>

        <span> </span>

        <input type="submit" value="Generate Graph" class="bg-red-500 hover:bg-red-600 text-white text-center font-bold rounded py-8">

        <span> </span>

        <span> </span>

        <input type="reset" class="bg-red-500 hover:bg-red-600 text-white text-center font-bold rounded py-8">

        <span> </span>
      </div>
    </form>
  </body>
</html>
