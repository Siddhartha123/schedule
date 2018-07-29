<html>
<link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css">
<!doctype html>
<title>
    NITR Central Time Table
</title>
<style>
    body {
        background-color: #e9e9ff;
        text-align: center;
        font-family: "Raleway";
    }
    
    th,
    td {
        text-align: center;
    }
    
    .table>tbody>tr {
        height: 59px;
    }
    
    .table>tbody>tr>td {
        vertical-align: middle;
    }
</style>

<body>
<div class="container-fluid">
    <div class="row text-center">
        <h1>NITR Central Time Table</h1>
    </div>
    <div class="row">
    <form method="POST" action="schedule_new.php">
        
            
                <div class="col-md-6">
                    <h2 class="box-title">Theory Courses</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Slot</th>
                                    <th>Subject</th>
                                    <th>Tutorial</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TA</td>
                                    <td>
                                        <input class="form-control" type="text" name="TA">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTA">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TB</td>
                                    <td>
                                        <input class="form-control" type="text" name="TB">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTB">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TC</td>
                                    <td>
                                        <input class="form-control" type="text" name="TC">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTC">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TD</td>
                                    <td>
                                        <input class="form-control" type="text" name="TD">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTD">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TE</td>
                                    <td>
                                        <input class="form-control" type="text" name="TE">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTE">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TF</td>
                                    <td>
                                        <input class="form-control" type="text" name="TF">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTF">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TG</td>
                                    <td>
                                        <input class="form-control" type="text" name="TG">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTG">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TJ</td>
                                    <td>
                                        <input class="form-control" type="text" name="TJ">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTJ">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TK</td>
                                    <td>
                                        <input class="form-control" type="text" name="TK">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTK">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TL</td>
                                    <td>
                                        <input class="form-control" type="text" name="TL">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="CTL">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TM</td>
                                    <td>
                                        <input class="form-control" type="text" name="TM">
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input class="checkbox checkbox-success" type="checkbox" name="CTM">Tutorial</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2 class="box-title">Laboratory Courses</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Slot</th>
                                    <th>Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PA</td>
                                    <td>
                                        <input class="form-control" type="text" name="PA">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PB</td>
                                    <td>
                                        <input class="form-control" type="text" name="PB">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PC</td>
                                    <td>
                                        <input class="form-control" type="text" name="PC">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PD</td>
                                    <td>
                                        <input class="form-control" type="text" name="PD">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PE</td>
                                    <td>
                                        <input class="form-control" type="text" name="PE">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PF</td>
                                    <td>
                                        <input class="form-control" type="text" name="PF">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PG</td>
                                    <td>
                                        <input class="form-control" type="text" name="PG">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PH</td>
                                    <td>
                                        <input class="form-control" type="text" name="PH">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PX</td>
                                    <td>
                                        <input class="form-control" type="text" name="PX">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PY</td>
                                    <td>
                                        <input class="form-control" type="text" name="PY">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
       
        <div class="row">

            <div class="form-group text-center ">
                <div class="col-md-6 col-md-offset-3">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">View Time Table</button>
                </div>
            </div>

        </div>

    </form>
 </div>
    </div>
    <!-- jQuery -->
    <script src="./assets/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>