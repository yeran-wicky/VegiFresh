<form action="" method="post" class="" id="collectionform">
                                <select class="w-100 form-select border-0 py-3 mb-4" id="cno" name="cno" required>
                                    <option value="">Select customer</option>
                                    <?php
                                        $sql1 = "SELECT cno, cname FROM customer";
                                        $result1 = $conn->query($sql1);
                                        if ($result1->num_rows > 0){
                                            while ($row = $result1->fetch_assoc()){
                                                echo "<option value='{$row['cno']}'>{$row['cname']}</option>";
                                            }
                                        }
                                    ?>
                                </select>
                                <select class="w-100 form-select border-0 py-3 mb-4" id="icode" name="icode" required>
                                    <option value="">Select item</option>
                                    <?php
                                        $sql2 = "SELECT icode, iname FROM item";
                                        $result2 = $conn->query($sql2);
                                        if ($result2->num_rows > 0){
                                            while ($row = $result2->fetch_assoc()){
                                                echo "<option value='{$row['icode']}'>{$row['iname']}</option>";
                                            }
                                        }
                                    ?>
                                </select>
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" id="weight" name="weight" placeholder="Weight" required>
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" id="price" name="price" placeholder="Price" required>
                                <input type="date" class="w-100 form-control border-0 py-3 mb-4" id="date" name="date" placeholder="Date" required>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary" type="submit" onclick="savecollection()">Submit</button>

                            </form>