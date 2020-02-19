<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="output.css">
  </head>

  <body class="bg-gray-800 font-montserrat">
    <h1 class="text-6xl text-white text-center">
      C3 Data Reporting
    </h1>

    <form action="APICall.php" target="_blank" method="get">
      <table class="table-fixed">
        <thead>
          <tr>
            <th class="text-4xl font-montserrat text-white text-center px-4 py-2">Ministry</th>
            <th class="text-4xl font-montserrat text-white text-center px-4 py-2">Session</th>
            <th class="text-4xl font-montserrat text-white text-center px-4 py-2">Graphs</th>
          </tr>
        </thead>
        <tr>
          <td>
            <table>
              <tbody>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="kids" name="ministry" value="2">
                    <label for="kids">Kids Church</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="youth" name="ministry" value="2">
                    <label for="youth">Youth / Shift</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="ya" name="ministry" value="2">
                    <label for="ya">Young Adults</label>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>

          <td>
            <table>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="weds" name="session" value="2">
                    <label for="weds">Wednesdsay</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="fri" name="session" value="2">
                    <label for="fri">Friday</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="sun" name="session" value="2">
                    <label for="sun">All Sunday</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="930" name="session" value="2">
                    <label for="930">Sunday 9:30</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="1130" name="session" value="2">
                    <label for="1130">Sunday 11:30</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="1730" name="session" value="2">
                    <label for="1730">Sunday 5:30</label>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>

          <td>
            <table>
              <tbody>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="kids" name="graph" value="2">
                    <label for="kids">Attendees</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="team" name="graph" value="2">
                    <label for="team">Team</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="2018" name="graph" value="2">
                    <label for="2018">2018 Data</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="month" name="graph" value="2">
                    <label for="month">Monthly Average</label>
                  </td>
                </tr>
                <tr>
                  <td class="font-montserrat text-white px-4 py-2">
                    <input type="radio" id="NtC" name="graph" value="2">
                    <label for="NtC">Average New to Church</label>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
