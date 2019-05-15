<form class="form-inline dotationForm" method="post" action="../../controller/formulaire/index.php"  >

                <div class="row"><!--vertes-->
                    <div class="form-group">
                        <input type="checkbox" id="vertes" name="attestation-verte" value="Attestations vertes">
                        <label for="subscribeNews">Attestation vertes</label>
                    </div>
                    <!--div class="form-group">
                    <label for="attestations Vertes">Du</label-->
                    <!--select class="form-control" id=""-->
                        <?php
                            // while($row=$totalVertes->fetch()){
                            //     echo('<option>'.$row[0].'</option>');
                            // }
                        ?>
                    <!--/select-->
                <!--/div-->
                <div class="form-group">
                    <label for="attestations jaunes">Nombre d'attestations</label>
                    <input type="number" class="form-control" name="nombreVertes">
                    </select>
                </div>
            </div><!--vertes-->

            <div class="row"><!--jaunes-->
                    <div class="form-group">
                        <input type="checkbox" id="jaunes" name="attestation-jaune" value="Attestations jaunes">
                        <label for="Attestations cedeao">Attestations jaunes</label>
                    </div>
                    <!--div class="form-group">
                    <label for="exampleFormControlSelect1">Du</label-->
                    <!--select class="form-control" id=""-->
                        <?php
                            // while($row=$totalJaunes->fetch()){
                            //     echo('<option>'.$row[0].'</option>');
                            // }
                        ?>
                    <!--/select>
                </div-->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nombre d'attestations</label>
                    <input type="number" class="form-control" name="nombreJaunes">
                </div>
            </div><!--jaunes-->
 
            <div class="row last-row"><!--cedeao-->
                    <div class="form-group">
                        <input type="checkbox" id="cedeao" name="attestation-cedeao" value="Attestations cedeao">
                        <label for="subscribeNews">Attestation cedeao</label>
                    </div>
                    <!--div class="form-group">
                    <label for="exampleFormControlSelect1">Du</label-->
                    <!--select class="form-control" id="exampleFormControlSelect1"-->
                        <?php
                            // while($row=$cedeaos->fetch()){
                            //     echo('<option>'.$row[0].'</option>');
                            // }
                        ?>
                    <!--/select>
                </div-->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nombre d'attestations</label>
                    <input type="number" class="form-control" name="nombreCedeao">
                </div>
            </div><!--cedeao-->
 
              <div class="row validation-row">
                <button type="submit" class="btn btn-primary mb-2 validDotation" name="action" value="Valider dotation">VALIDER</button>
              </div>
            </form>