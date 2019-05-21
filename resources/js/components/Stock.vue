<template>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <h3 class="card-title">Stock Items</h3>
          <div class="card">
            <div class="card-header">
              <div class="card-tools">
                  <router-link to="/addStock"><button class="btn btn-success" id="btn-add" data-toggle="modal" data-target="#addNew">Add Item</button></router-link>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ItemNo</th>
                  <th>ItemName</th>
                  <th>UnitPrice</th>
                  <th>Discount</th>
                  <th>SupplierId</th>
                  <th>InvoiceNo</th>
                  <th>Quantity</th>
                  <th>SellingPrice</th>
                  <th>TotalBalance</th>
                  <th>Active</th>
                  <th>Modify</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon </td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon </td>
                  <td>
                      <a href="#">Edit</a> /
                      <a href="#" id="del">Delete</a>
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                form:new Form({
                    Discount:'',
                    ItemName:'',
                    UnitPrice:'',
                    SupplierId:'',
                    InvoiceNo:'',
                    Quantity:'',
                    SellingPrice:'',
                    TotalBalance:'',
                    Active:''
                })
            }
        },
        methods:{
                addItem(){
                    this.form.post('api/stock')
                }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    #del{
        color: crimson;
    }
    #btn-add{
        float: right;
    }
</style>
