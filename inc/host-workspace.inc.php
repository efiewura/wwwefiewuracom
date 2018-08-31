<!-- HOST -->
    <div style= "padding-top: 120px;" class="row login-form">
        <div class="col-md-6 offset-md-3">
            <p class="property-head first-word wow fadeInUp" data-wow-delay="0.3s">Have A Workspace To Host?</p>
            <p class="wow fadeInUp" data-wow-delay="0.5s" style="text-align: justify; margin-bottom: 40px; font-size: 18px;">
                Fill the form below with the details of the 
                particular workspace you want to host. To make transactions easy make
                sure you input accurate information about the workspace
            </p>
            <form class="custom-form wow fadeIn" data-wow-delay="0.8s" action='?pg=action' method='POST'>
                <h5>1. What type of workspace is it ?</h5>
                
                <p style="font-weight: bold;">Choose Workspace type</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="workspace-type" required="" checked="" value="self-contained" id="self-contained">
                    <label class="form-check-label" for="self-contained">Self-Contained</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="workspace-type" required="" value="co-working" id="co-working">
                    <label class="form-check-label" for="co-working">Co-Working</label>
                </div>

                <p style="font-weight: bold; margin-top: 20px;">Buyer will have access to</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="workspace-space" required="" value="room" id="room">
                    <label class="form-check-label" for="room">A Room</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="workspace-space" required="" value="floor" id="floor">
                    <label class="form-check-label" for="floor">A Floor</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="workspace-space" required="" value="whole-building" id="whole-building">
                    <label class="form-check-label" for="whole-building">Whole Building</label>
                </div>
                             
                <h5 style="margin-top: 30px;">2. Where's your workspace located ?</h5>
                <p style="font-weight: bold;">Region</p>
                <div style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="region" required="" >
                        <option value="" disabled selected>Choose your option</option>
                        <option value="greater-accra">Greater Accra Region</option>
                        <option value="ashanti">Ashanti Region</option>
                        <option value="volta">Volta Region</option>
                        <option value="central">Central Region</option>
                        <option value="eastern">Eastern Region</option>
                        <option value="brong-ahafo">Brong-Ahafo Region</option>
                        <option value="western">Western Region</option>
                        <option value="northern">Northern Region</option>
                        <option value="upper-east">Upper-East Region</option>
                        <option value="upper-west">Upper-West Region</option>
                    </select>
                </div>

                <p style="font-weight: bold;">Name of city / town</p>  
                <div class="form-check">
                    <div class="form-group"><input class="form-control" type="text" placeholder="City / Town name" name="city" required=""></div>
                </div>              

                <p style="font-weight: bold;">Area</p>  
                <div class="form-check">
                    <div class="form-group"><input class="form-control" type="text" placeholder="Area" name="area" required=""></div>
                </div> 

                <h5 style="margin-top: 30px;">3. Show off your Workspace </h5>

                <p style="font-weight: bold;">Upload cover picture of your Workspace</p>
                <div class="form-check">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload an image" >
                        </div>
                    </div>
                </div>

                <p style="font-weight: bold;">Upload other pictures of your Workspace</p>
                <div class="form-check">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Files</span>
                            <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload images">
                        </div>
                    </div>
                </div>

                <h5 style="margin-top: 30px;">4. Describe your Workspace </h5> 
                <p style="font-weight: bold;">Name</p>  
                <div class="form-check">
                    <div class="form-group"><input class="form-control" type="text" placeholder="Name" name="name"></div>
                </div> 

                <p style="font-weight: bold;"> Give a short desription of the Workspace</p>
                <div class="form-check">
                    <textarea id="description" class="materialize-textarea" placeholder="Description" name="description"></textarea>
                </div>


                <h5 style="margin-top: 30px;">5. For sale or rent ? </h5>
                <p style="font-weight: bold;">Do you want to sell or rent your Workspace?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flag" required="" value="s" id="sell" onChange="findselected()">
                    <label class="form-check-label" for="sell">Sell</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flag" required="" value="r" id="rent" onChange="findselected()">
                    <label class="form-check-label" for="rent">Rent</label>
                </div>

                <h5 style="margin-top: 30px;">6. Price of your Workspace </h5>
                <p style="font-weight: bold;">Name the price of your Workspace in <span style="text-decoration: underline;">cedis</span></p>

                <div style="margin-top: 15px; margin-bottom: 40px;" class="form-check">
                    <input class="form-control" type="number" placeholder="Price" name="price" required="">
                </div>

                <p style="font-weight: bold;">Per </p>
                <div id="per" style="margin-top: -8px;" class="form-check">
                    <select class="form-check-input" name="per">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="day">Day</option>
                        <option value="month">Month</option>
                        <option value="year">Year</option>
                    </select>
                </div>


                <button style="margin: 40px auto; width: 150px; display: block;" class="btn my-btn mt-2" id="submit-button" type="submit">
                    UPLOAD AD
                </button>
                <input type="hidden" name="formtype" value="addwspace">
            </form>
        </div>
    </div>

    <div id="dtBox"></div>
    <!-- HOST END -->