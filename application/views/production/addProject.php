 <!-- Main container -->
    <main>

      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>jsGrid</strong> tables
            <small>A lightweight client-side data grid control based on jQuery. It supports basic grid operations like inserting, filtering, editing, deleting, paging, and sorting. jsGrid is flexible and allows to customize its appearance and components.<br><br><a class="fs-12" href="http://js-grid.com/" target="_blank">Official website</a></small>
          </h1>
        </div>

        <div class="header-action">
          <nav class="nav">
            <a class="nav-link" href="tables.html">Basic</a>
            <a class="nav-link" href="tables-color.html">Color</a>
            <a class="nav-link" href="tables-datatables.html">Datatables</a>
            <a class="nav-link active" href="tables-jsgrid.html">js Grid</a>
          </nav>
        </div>
      </header><!--/.header -->



      <div class="main-content">




        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Getting started
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>Getting</strong> started</h4>

          <div class="card-body">
            <div id="jsgrid-start"></div>
          </div>
        </div>






        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Basic
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>Basic</strong></h4>

          <div class="card-body">
            <div id="jsgrid-basic" data-provide="jsgrid"></div>
          </div>
        </div>






        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Static data
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>Static</strong> data</h4>

          <div class="card-body">
            <div id="jsgrid-static" data-provide="jsgrid"></div>
          </div>
        </div>







        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | OData service
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>OData</strong> service</h4>

          <div class="card-body">
            <div id="jsgrid-odata" data-provide="jsgrid"></div>
          </div>
        </div>







        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Sorting
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><strong>Sorting</strong></h4>
            <select class="form-control w-150px" id="sortingField" data-provide="selectpicker">
              <option>Name</option>
              <option>Age</option>
              <option>Address</option>
              <option>Country</option>
              <option>Married</option>
            </select>
          </div>


          <div class="card-body">
            <div id="jsgrid-sorting" data-provide="jsgrid"></div>
          </div>
        </div>








        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Custom view
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>Custom</strong> view</h4>

          <div class="card-body">
            <div class="text-center mb-3">
              <div class="btn-group" id="view-controller" data-toggle="buttons">
                <label class="btn btn-light active">
                  <input id="heading" type="checkbox" checked autocomplete="off">Heading
                </label>
                <label class="btn btn-light active">
                  <input id="filtering" type="checkbox" checked autocomplete="off">Filtering
                </label>
                <label class="btn btn-light">
                  <input id="inserting" type="checkbox" autocomplete="off">Inserting
                </label>
                <label class="btn btn-light active">
                  <input id="editing" type="checkbox" checked autocomplete="off">Editing
                </label>
                <label class="btn btn-light active">
                  <input id="paging" type="checkbox" checked autocomplete="off">Paging
                </label>
                <label class="btn btn-light active">
                  <input id="sorting" type="checkbox" checked autocomplete="off">Sorting
                </label>
                <label class="btn btn-light active">
                  <input id="selecting" type="checkbox" checked autocomplete="off">Selecting
                </label>
              </div>
            </div>


            <div id="jsgrid-view" data-provide="jsgrid"></div>
          </div>
        </div>







        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Batch delete
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>Batch</strong> delete</h4>

          <div class="card-body">
            <div id="jsgrid-delete" data-provide="jsgrid"></div>
          </div>
        </div>







        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Rows reordering
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <h4 class="card-title"><strong>Rows</strong> reordering</h4>

          <div class="card-body">
            <div id="jsgrid-reordering" data-provide="jsgrid, jqueryui"></div>
          </div>
        </div>



        <br>
        <div class="callout callout-info shadow-1">
          <h5>More samples</h5>
          <p>If you want to see complete list of demos from jsGrid, visit <a href="http://js-grid.com/demos/" target="_blank">their demo page</a>.</p>
        </div>
        <br>




      </div><!--/.main-content -->


      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2017 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</p>
          </div>

          <div class="col-md-6">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="../help/articles.html">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../help/faq.html">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://themeforest.net/item/theadmin-responsive-bootstrap-4-admin-dashboard-webapp-template/20475359?license=regular&amp;open_purchase_for_item_id=20475359&amp;purchasable=source&amp;ref=thethemeio">Purchase Now</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/script.min.js"></script>



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




        /*
        |--------------------------------------------------------------------------
        | jsGrid - Basic
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-basic").jsGrid({
            height: "500px",
            width: "100%",
            filtering: true,
            editing: true,
            inserting: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 15,
            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete the client?",
            controller: db,
            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                { type: "control" }
            ]
        });




        /*
        |--------------------------------------------------------------------------
        | jsGrid - Static data
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-static").jsGrid({
            height: "500px",
            width: "100%",
            sorting: true,
            paging: true,
            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married" }
            ],
            data: db.clients
        });




        /*
        |--------------------------------------------------------------------------
        | jsGrid - OData service
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-odata").jsGrid({
            height: "500px",
            width: "100%",
            sorting: true,
            paging: false,
            autoload: true,
            controller: {
                loadData: function() {
                    var d = $.Deferred();

                    $.ajax({
                        url: "http://services.odata.org/V3/(S(3mnweai3qldmghnzfshavfok))/OData/OData.svc/Products",
                        dataType: "json"
                    }).done(function(response) {
                        d.resolve(response.value);
                    });

                    return d.promise();
                }
            },
            fields: [
                { name: "Name", type: "text", width: 100 },
                { name: "Description", type: "textarea", width: 200 },
                { name: "Rating", type: "number", width: 150, align: "center",
                    itemTemplate: function(value) {
                        return $("<div>").addClass("text-yellow fs-18").append(Array(value + 1).join("&#9733;"));
                    }
                },
                { name: "Price", type: "number", width: 100,
                    itemTemplate: function(value) {
                        return value.toFixed(2) + "$"; }
                }
            ]
        });





        /*
        |--------------------------------------------------------------------------
        | jsGrid - Sorting
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-sorting").jsGrid({
            height: "500px",
            width: "100%",
            autoload: true,
            selecting: false,
            controller: db,
            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married" }
            ]
        });

        $('#sortingField').on('change', function() {
          $("#jsgrid-sorting").jsGrid("sort", $(this).val());
        });





        /*
        |--------------------------------------------------------------------------
        | jsGrid - Custom view
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-view").jsGrid({
            height: "500px",
            width: "100%",
            filtering: true,
            editing: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 15,
            pageButtonCount: 5,
            controller: db,
            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                { type: "control", modeSwitchButton: false, editButton: false }
            ]
        });

        $("#view-controller input[type=checkbox]").on("change", function() {
            var $cb = $(this);
            $("#jsgrid-view").jsGrid("option", $cb.attr("id"), $cb.is(":checked"));
        });






        /*
        |--------------------------------------------------------------------------
        | jsGrid - Batch delete
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-delete").jsGrid({
            height: "400px",
            width: "100%",
            autoload: true,
            confirmDeleting: false,
            paging: true,
            controller: {
                loadData: function() {
                    return db.clients;
                }
            },
            fields: [
                {
                    headerTemplate: function() {
                        return $("<button>").attr("type", "button").addClass('btn btn-xs btn-danger').text("Delete")
                                .on("click", function () {
                                    deleteSelectedItems();
                                });
                    },
                    itemTemplate: function(_, item) {
                        return $("<input>").attr("type", "checkbox")
                                .prop("checked", $.inArray(item, selectedItems) > -1)
                                .on("change", function () {
                                    $(this).is(":checked") ? selectItem(item) : unselectItem(item);
                                });
                    },
                    align: "center",
                    width: 50
                },
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 }
            ]
        });


        var selectedItems = [];

        var selectItem = function(item) {
            selectedItems.push(item);
        };

        var unselectItem = function(item) {
            selectedItems = $.grep(selectedItems, function(i) {
                return i !== item;
            });
        };

        var deleteSelectedItems = function() {
            if(!selectedItems.length || !confirm("Are you sure?"))
                return;

            deleteClientsFromDb(selectedItems);

            var $grid = $("#jsgrid-delete");
            $grid.jsGrid("option", "pageIndex", 1);
            $grid.jsGrid("loadData");

            selectedItems = [];
        };

        var deleteClientsFromDb = function(deletingClients) {
            db.clients = $.map(db.clients, function(client) {
                return ($.inArray(client, deletingClients) > -1) ? null : client;
            });
        };



        /*
        |--------------------------------------------------------------------------
        | jsGrid - Rows reordering
        |--------------------------------------------------------------------------
        */

        $("#jsgrid-reordering").jsGrid({
            height: "500px",
            width: "100%",
            autoload: true,

            rowClass: function(item, itemIndex) {
                return "client-" + itemIndex;
            },

            controller: {
                loadData: function() {
                    return db.clients.slice(0, 15);
                }
            },

            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married", sorting: false }
            ],

            onRefreshed: function() {
                var $gridData = $("#jsgrid-reordering .jsgrid-grid-body tbody");

                $gridData.sortable({
                    update: function(e, ui) {
                        // array of indexes
                        var clientIndexRegExp = /\s*client-(\d+)\s*/;
                        var indexes = $.map($gridData.sortable("toArray", { attribute: "class" }), function(classes) {
                            return clientIndexRegExp.exec(classes)[1];
                        });
                        alert("Reordered indexes: " + indexes.join(", "));

                        // arrays of items
                        var items = $.map($gridData.find("tr"), function(row) {
                            return $(row).data("JSGridItem");
                        });
                        console && console.log("Reordered items", items);
                    }
                });
            }
        });




      });
    </script>