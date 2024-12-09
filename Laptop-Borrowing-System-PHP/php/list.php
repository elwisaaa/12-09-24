<!DOCTYPE html>
<html>

<head>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of laptops</title>
    <link rel="stylesheet" type="text/css" href="../css/stylelist.css">
    <?php
    include 'navbar.php';
    ?>
</head>

<body>
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/acerr14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">No 1</span>
                            </div>
                            <h5 class="card-title">Acer Aspire R14</h5>
                            <div class="text-center my-4">
                                <button id="1" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/acernitro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">No 2</span>
                            </div>
                            <h5 class="card-title">Acer Aspire V 15 Nitro</h5>
                            <div class="text-center my-4">
                                <button id="2" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/acernitro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">No 3</span>
                            </div>
                            <h5 class="card-title">Acer Aspire V 15 Nitro</h5>
                            <div class="text-center my-4">
                                <button id="3" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/pavilion14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">No 4</span>
                            </div>
                            <h5 class="card-title">HP Pavillion 14</h5>
                            <div class="text-center my-4">
                                <button id="4" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/lenovo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">L1</span>
                            </div>
                            <h5 class="card-title">Lenovo Thinkpad L15 Gen2</h5>
                            <div class="text-center my-4">
                                <button id="L1" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/lenovo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">L2</span>
                            </div>
                            <h5 class="card-title">Lenovo Thinkpad L15 Gen2</h5>
                            <div class="text-center my-4">
                                <button id="L2" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/lenovo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">L3</span>
                            </div>
                            <h5 class="card-title">Lenovo Thinkpad L15 Gen2</h5>
                            <div class="text-center my-4">
                                <button id="L3" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/lenovo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">L4</span>
                            </div>
                            <h5 class="card-title">Lenovo Thinkpad L15 Gen2</h5>
                            <div class="text-center my-4">
                                <button id="L4" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/lenovo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary">L5</span>
                            </div>
                            <h5 class="card-title">Lenovo Thinkpad L15 Gen2</h5>
                            <div class="text-center my-4">
                                <button id="L5" type="button" class="btn btn-warning" onclick="checkavail(this)">Borrow</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- The Modal -->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Enter your info</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>IC No</label>
                            <input id="ic" type="text" class="form-control" placeholder="IC No." required>
                            <label>Name</label>
                            <input id="name" type="text" class="form-control" placeholder="name" required>
                            <label>Date borrowed</label>
                            <br>
                            <label class="date-borrowed" id="date"></label>
                            <br> <label>Purpose</label>
                            <textarea id="purpose" class="form-control" required></textarea>
                            <div class="modal-button">
                                <button onclick="borrowfunc()" id="borrow" type="button" class="btnmodal">Borrow</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="unavailablemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Notice</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <img style="display:block;margin:auto;width:100px;height:100px;margin-bottom:10px;" src="../assets/unavail.svg">
                            <label style="font-weight:bold;display:flex;justify-content:space-evenly;">This laptop is not available</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(function() {
        $('body').hide().fadeIn('slow');
    });
    $(function() {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#datesend').attr('min', maxDate);
    });

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    var data;
    today = dd + '-' + mm + '-' + yyyy;

    document.getElementById("date").innerHTML = today;

    function checkavail(button) {
        data = button.id;
        $.ajax({
            url: 'laptopcheck.php',
            type: 'POST',
            data: {
                data: data
            },
            success: function(response) {
                if (response.dataFound) {
                    //Show modal
                    $('#modal').modal('show');
                } else {
                    $('#unavailablemodal').modal('show');
                }

            }
        });
    }

    function borrowfunc() {

        if ($("#ic").val() && $("#name").val() && $("#purpose").val()) {
            var laptopid = data;
            var ic = $("#ic").val();
            var name = $("#name").val();
            var dateborrow = today;
            var datesend = "";
            var purpose = $("#purpose").val();
            var dataString = 'laptopid=' + laptopid + '&ic=' + ic + '&name=' + name + '&dateborrow=' + dateborrow + '&datesend=' + datesend + '&purpose=' + purpose;
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'borrowinsert.php',
                success: function(response) {
                    if (response.success) {
                        alert("Success");
                        location.reload();
                    } else {
                        alert("failed");
                    }
                }
            });
        } else {
            alert("Please insert data!!");
        }

    }
</script>

</html>