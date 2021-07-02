<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="itl.css">
</head>

<body>
    
    <form action="" method="POST">
                    <input type="text" name="id"  placeholder="ENTER THE CODE..">
                    <input type="submit" name="search" value="SUBMIT RESPONSE">
                </form>
    <section class="main-1">
    <div class="head1">
        <div class= " item in-div bb1">
            <h2 class="  dd22">&nbsp;BILL TO:</h2>
            <div class=" bb-2">
                <?php
            
                        $conn = mysqli_connect("localhost", "root","");
                        $db=mysqli_select_db($conn,'itl');
                        
                        
                        if(isset($_POST['search']))
                        {
                            $id=$_POST['id'];
                            $query="SELECT p.ADD1,p.ADD2,p.ADD3,p.City,p.State from sheet1 as p where p.CODE='$id' ";
                            $query_run=mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($query_run))
                           {
                            ?>
                                 <?php echo $row['ADD1'];?> 
                                 <?php echo "<br>" ;?> 
                                 <?php echo $row['ADD2'] ;?> 
                                 <?php echo "<br>" ;?> 
                                 <?php echo $row['ADD3'] ;?> 
                                 <?php echo "<br>" ;?> 
                                 <?php echo $row['City'] ;?> 
                                 <?php echo "<br>" ;?> 
                                 <?php echo $row['State'] ;?> 

                                 
                           
                            <?php
                            }
                        }
                       ?>
            </div>
        </div>

            <h2 class="item in-div">&nbsp;SHIPP TO:</h2>

            <div class="item ">
                <div class="in-1">
                    <h2 class="in-div">&nbsp;DESIGNATION:</h2>
                    <h1 class="in-div-4">&nbsp;Freight:</h1>
                </div>
                <h1 class="in-div-4">&nbsp;Insp.By:</h1>
            </div>

            <div class="item item-1">
                <h2 class="in-div-3 div-2">DES. &nbsp;ADVICE</h2>
                <div class="in-2">
                    <h1 class="in-div-2 diiiv">S.No.</h1>
                    <h1 class="in-div-2">Dated.</h1>
                    <h1 class="in-div-2 in-div2-2-l">File No.</h1>
                </div>
            </div>

    </div>

        <div class="head2">
            <div class="d-1 head2-div ">
                <h3 class="items od">&nbsp;ORDER NO.</h3>
                <div class="items d-4">
                    <h3 class="items-i1">&nbsp;Dated</h3>
                    <h3 class="items-i1">&nbsp;GST NO.</h3>
                </div>
            </div>


            <div class="head2-div-1 d-2">
                <h3 class="items-i1 ii">&nbsp;SPEC. IS:</h3>
                <h3 class="items-i1 ii">&nbsp;DP.</h3>
                <h3 class="items-i1 ii ii-l">&nbsp;HYDRO.</h3>
            </div>

            <div class="head2-div-2 d-2">
                <h3 class="items-i1-1 ii-1">&nbsp;LENGTH:</h3>
                <h3 class="items-i1-1 ii-1 ii-1-l">&nbsp;LD:</h3>

            </div>
        </div>

        <div>
            <table id="myTable" class="table" media="screen">

                <thead class="th">
                    <tr class="tr1">
                        <td class="t-head">S.NO</td>

                        <td class="i11 t-head">
                            <span class="he  hh">PARTICULARS</span>
                            <span class="he he1">
                                <span class="he hhh">Code</span>
                                <span class="he hhh hhh-1">ITEM</span>
                            </span>
                        </td>
                        <td class="t-head thead11">SIZE</td>
                        <td class="t-head">CLASS</td>
                        <td class="i11 t-head">
                            <span class="he hh hh1111">M</span>
                            <span class="he he2">
                                <span class="he">No. of Pipes</span>
                            </span>
                        </td>
                        <td class="t-head">MTRS</td>
                        <td class="t-head">TON</td>
                        <td class="t-head">RATE Per Mtr.</td>
                        <td class="t-head">FRT & U/l</td>
                        <td class="t-head">INV. NO</td>
                        <td class="t-head">DATE</td>
                        <td class="t-head hhhh">QTY</td>
                    </tr>

                    <tr>
                        <td><input id="txtName1" class="in"></td>
                        <td><input id="txtAge1" class="in2"></td>
                        <td><input id="txtGender1" class="in3"></td>
                        <td><input id="txtOccupation1" class="in4"></td>
                        <td><input id="txtOccupation1" class="in5"></td>
                        <td><input id="txtOccupation1" class="in6"></td>
                        <td><input id="txtOccupation1" class="in7"></td>
                        <td><input id="txtOccupation1" class="in8"></td>
                        <td><input id="txtOccupation1" class="in9"></td>
                        <td><input id="txtOccupation1" class="in10"></td>
                        <td><input id="txtOccupation1" class="in11"></td>
                        <td><input id="txtOccupation1" class="in12"></td>
                    </tr>

                    <tr>
                        <td><input id="txtName1" class="in"></td>
                        <td><input id="txtAge1" class="in2"></td>
                        <td><input id="txtGender1" class="in3"></td>
                        <td><input id="txtOccupation1" class="in4"></td>
                        <td><input id="txtOccupation1" class="in5"></td>
                        <td><input id="txtOccupation1" class="in6"></td>
                        <td><input id="txtOccupation1" class="in7"></td>
                        <td><input id="txtOccupation1" class="in8"></td>
                        <td><input id="txtOccupation1" class="in9"></td>
                        <td><input id="txtOccupation1" class="in10"></td>
                        <td><input id="txtOccupation1" class="in11"></td>
                        <td><input id="txtOccupation1" class="in12"></td>
                    </tr>

                    <tr>
                        <td><input id="txtName1" class="in"></td>
                        <td><input id="txtAge1" class="in2"></td>
                        <td><input id="txtGender1" class="in3"></td>
                        <td><input id="txtOccupation1" class="in4"></td>
                        <td><input id="txtOccupation1" class="in5"></td>
                        <td><input id="txtOccupation1" class="in6"></td>
                        <td><input id="txtOccupation1" class="in7"></td>
                        <td><input id="txtOccupation1" class="in8"></td>
                        <td><input id="txtOccupation1" class="in9"></td>
                        <td><input id="txtOccupation1" class="in10"></td>
                        <td><input id="txtOccupation1" class="in11"></td>
                        <td><input id="txtOccupation1" class="in12"></td>
                    </tr>
                    <tr>
                        <td><input id="txtName1" class="in"></td>
                        <td><input id="txtAge1" class="in2"></td>
                        <td><input id="txtGender1" class="in3"></td>
                        <td><input id="txtOccupation1" class="in4"></td>
                        <td><input id="txtOccupation1" class="in5"></td>
                        <td><input id="txtOccupation1" class="in6"></td>
                        <td><input id="txtOccupation1" class="in7"></td>
                        <td><input id="txtOccupation1" class="in8"></td>
                        <td><input id="txtOccupation1" class="in9"></td>
                        <td><input id="txtOccupation1" class="in10"></td>
                        <td><input id="txtOccupation1" class="in11"></td>
                        <td><input id="txtOccupation1" class="in12"></td>
                    </tr>

                    <tr>
                        <td><input id="txtName1" class="in"></td>
                        <td><input id="txtAge1" class="in2"></td>
                        <td><input id="txtGender1" class="in3"></td>
                        <td><input id="txtOccupation1" class="in4"></td>
                        <td><input id="txtOccupation1" class="in5"></td>
                        <td><input id="txtOccupation1" class="in6"></td>
                        <td><input id="txtOccupation1" class="in7"></td>
                        <td><input id="txtOccupation1" class="in8"></td>
                        <td><input id="txtOccupation1" class="in9"></td>
                        <td><input id="txtOccupation1" class="in10"></td>
                        <td><input id="txtOccupation1" class="in11"></td>
                        <td><input id="txtOccupation1" class="in12"></td>
                    </tr>


                </thead>

            </table>

        </div>

   <hr class="header">
        <div class="head3">
            
            <table id="myTable1" class="table">
                <thead>
                    <tr>
                        <td class="item-no-v-1"><input type="text" size="2%"></td>
                        <td class="item-no-v-2"><input type="text" size="8%"></td>
                        <td class="item-no-v-3"><input type="text" size="140"></td>
                        <td class="item-no-v-4"><input type="text" size="5%" ></td>
                        <td class="item-no-v-5"><input type="text" size="6%" style="padding-right: 0.35vw;"></td>
                        <td class="item-no-v-6"><input type="text"size="5%"></td>
                    </tr>
                    <tr>
                        <td class="item-no-v-1"><input type="text" size="2%"></td>
                        <td class="item-no-v-2"><input type="text" size="8%"></td>
                        <td class="item-no-v-3"><input type="text" size="140"></td>
                        <td class="item-no-v-4"><input type="text" size="5%" ></td>
                        <td class="item-no-v-5"><input type="text" size="6%" style="padding-right: 0.35vw;"></td>
                        <td class="item-no-v-6"><input type="text"size="5%"></td>
                    </tr>
                    <tr>
                        <td class="item-no-v-1"><input type="text" size="2%"></td>
                        <td class="item-no-v-2"><input type="text" size="8%"></td>
                        <td class="item-no-v-3"><input type="text" size="140"></td>
                        <td class="item-no-v-4"><input type="text" size="5%" ></td>
                        <td class="item-no-v-5"><input type="text" size="6%" style="padding-right: 0.35vw;"></td>
                        <td class="item-no-v-6"><input type="text"size="5%"></td>
                    </tr>

                    <tr>
                        <td class="item-no-v-1"><input type="text" size="2%"></td>
                        <td class="item-no-v-2"><input type="text" size="8%"></td>
                        <td class="item-no-v-3"><input type="text" size="140"></td>
                        <td class="item-no-v-4"><input type="text" size="5%" ></td>
                        <td class="item-no-v-5"><input type="text" size="6%" style="padding-right: 0.35vw;"></td>
                        <td class="item-no-v-6"><input type="text"size="5%"></td>
                    </tr>


                    <tr>
                        <td class="item-no-v-1"><input type="text" size="2%"></td>
                        <td class="item-no-v-2"><input type="text" size="8%"></td>
                        <td class="item-no-v-3"><input type="text" size="140"></td>
                        <td class="item-no-v-4"><input type="text" size="5%" ></td>
                        <td class="item-no-v-5"><input type="text" size="6%" style="padding-right: 0.35vw;"></td>
                        <td class="item-no-v-6"><input type="text"size="5%"></td>
                    </tr>
                 


                   
                  
                </thead>
            </table>           
        </div> 
        <hr class="header">
        <div>
            <table id="myTable1" class="table">
                <thead>
                    <tr>
                        <td class="item-no-v-1" style="font-weight: bolder;">1.Goods to dispatch after inspection and clearance from H/O <br> SPECIAL INSTRUCTIONS</td>
                        <td class="item-no-v-2" style="font-weight: bolder; font-size: 1.43vw;">Freight</td>
                        <td class="item-no-v-3"> &nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" size="169%"></td>
                        <td>Insp.Fee</td>
                        <td><input type="text" size="4%"></td>
                    </tr>
                    <tr>
                        <td><input type="text" size="169%"></td>
                        <td>Others</td>
                        <td><input type="text" size="4%"></td>
                    </tr>
                    <tr>
                        <td><input type="text" size="169%"></td>
                        <td>CGST%</td>
                        <td><input type="text" size="4%"></td>
                    </tr>
                    <tr>
                        <td><input type="text" size="169%"></td>
                        <td>SGST%</td>
                        <td><input type="text" size="4%"></td>
                    </tr>
                    <tr>
                        <td><input type="text" size="169%"></td>
                        <td>IGST%</td>
                        <td><input type="text" size="4%"></td>
                    </tr>

                    <tr>
                        <td> FOI(MKT-03) <input type="text" size="40%"> (CHECKED BY) <input type="text" size="30%"> (APPROVED) <input type="text"></td>
                        <td style="font-weight: bolder;">TOTAL</td>
                        <td><input type="text" size="4%"></td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
        
        

    </section>

    <form action="" method="POST">
        <input type="text" name="" id="" placeholder="ENTER THE CODE..">
        <input type="submit" name="search" value="SUBMIT RESPONSE">
    </form>



    <button type="button" onclick="myFunction()">ADD ROW table 1</button>
    <button onclick="myFunction1()">DELETE ROW table 1</button>

   

    <script>
        var index = 1;
        function myFunction() {

            var table = document.getElementById("myTable");
            var row = table.insertRow(table.rows.length);
            var cell1 = row.insertCell(0);
            var t1 = document.createElement("input");
            t1.id = "txtName" + index;
            t1.classList = "in";
            cell1.appendChild(t1);

            var cell2 = row.insertCell(1);
            var t2 = document.createElement("input");
            t2.id = "txtAge" + index;
            cell2.appendChild(t2);
            var cell3 = row.insertCell(2);
            var t3 = document.createElement("input");
            t3.id = "txtGender" + 1;
            cell3.appendChild(t3);
            var cell4 = row.insertCell(3);
            var t4 = document.createElement("input");
            t4.id = "txtOccupation" + index;
            cell4.appendChild(t4);

            var cell5 = row.insertCell(4);
            var t5 = document.createElement("input");
            t5.id = "txtOccupation" + index;
            cell5.appendChild(t5);

            var cell6 = row.insertCell(5);
            var t6 = document.createElement("input");
            t6.id = "txtOccupation" + index;
            cell6.appendChild(t6);

            var cell7 = row.insertCell(6);
            var t7 = document.createElement("input");
            t7.id = "txtOccupation" + index;
            cell7.appendChild(t7);


            var cell8 = row.insertCell(7);
            var t8 = document.createElement("input");
            t8.id = "txtOccupation" + index;
            cell8.appendChild(t8);


            var cell9 = row.insertCell(8);
            var t9 = document.createElement("input");
            t9.id = "txtOccupation" + index;
            cell9.appendChild(t9);


            var cell10 = row.insertCell(9);
            var t10 = document.createElement("input");
            t10.id = "txtOccupation" + index;
            cell10.appendChild(t10);

            var cell11 = row.insertCell(10);
            var t11 = document.createElement("input");
            t11.id = "txtOccupation" + index;
            cell11.appendChild(t11);

            var cell12 = row.insertCell(11);
            var t12 = document.createElement("input");
            t12.id = "txtOccupation" + index;
            cell12.appendChild(t12);

            t2.classList = "in2";
            t3.classList = "in3";
            t4.classList = "in4";
            t5.classList = "in5";
            t6.classList = "in6";
            t7.classList = "in7";
            t8.classList = "in8";
            t9.classList = "in9";
            t10.classList = "in10";
            t11.classList = "in11";
            t12.classList = "in12";

            index++;



        }
        function myFunction1() {
            if (myTable.rows.length > 6)
                document.getElementById("myTable").deleteRow(myTable.rows.length - 1);
        }







    </script>

</body>

</html>