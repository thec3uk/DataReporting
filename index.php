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
                        <input type="checkbox" id="kids" name="ministry" value="2">
                        <label for="kids">Kids Church</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="youth" name="ministry" value="2">
                        <label for="youth">Youth / Shift</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="ya" name="ministry" value="2">
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
                        <input type="checkbox" id="weds" name="session" value="2">
                        <label for="weds">Wednesdsay</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="fri" name="session" value="2">
                        <label for="fri">Friday</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="sun" name="session" value="2">
                        <label for="sun">All Sunday</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="930" name="session" value="2">
                        <label for="930">Sunday 9:30</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="1130" name="session" value="2">
                        <label for="1130">Sunday 11:30</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="1730" name="session" value="2">
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
                        <input type="checkbox" id="kids" name="graph" value="2">
                        <label for="kids">Attendees</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="team" name="graph" value="2">
                        <label for="team">Team</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="2018" name="graph" value="2">
                        <label for="2018">2018 Data</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="month" name="graph" value="2">
                        <label for="month">Monthly Average</label>
                      </td>
                    </tr>

                    <tr>
                      <td class="font-montserrat text-white px-4 py-2">
                        <input type="checkbox" id="NtC" name="graph" value="2">
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
