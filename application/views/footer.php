        <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2017 <a href="">Tim Absensi ITS</a>. All rights reserved.</p>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->

     <!-- Sample data to populate jsGrid demo tables -->
    <script src="../assets/data/js/jsgrid-db.js"></script>

    <script>
      app.ready(function(){


        /*
        |--------------------------------------------------------------------------
        | jsGrid - Getting started
        |--------------------------------------------------------------------------
        */
        var clients = [
            { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
            { "Name": "Connor Johnston", "Age": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
            { "Name": "Lacey Hess", "Age": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
            { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
            { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false }
        ];

        var countries = [
            { Name: "", Id: 0 },
            { Name: "United States", Id: 1 },
            { Name: "Canada", Id: 2 },
            { Name: "United Kingdom", Id: 3 }
        ];

        $("#jsgrid-start").jsGrid({
            width: "100%",
            height: "314px",

            inserting: true,
            editing: true,
            sorting: true,
            paging: true,

            data: clients,

            fields: [
                { name: "Name", type: "text", width: 150, validate: "required" },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                { type: "control" }
            ]
        });


      });
    </script>


    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    <script src="<?= base_url() ?>assets/js/core.min.js"></script>
    <script src="<?= base_url() ?>assets/js/app.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.min.js"></script>


  </body>
</html>