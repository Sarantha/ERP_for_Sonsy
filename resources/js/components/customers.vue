<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="card-title">Customer Details</h3>
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <router-link to="/addPeople"><button class="btn btn-success" id="btn-add2">Add Customers</button></router-link>
                        </div>
                    </div>
                    <div class="card-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Telephone No</th>
                                    <th>City</th>
                                    <th>Street</th>
                                    <th>NIC No</th>
                                    <th>Modify</th>
                                </tr>
                                <tr v-for="customer in customers" :key="customer.Id">
                                    <td>{{customer.CustomerId}}</td>
                                    <td>{{customer.Fname}}</td>
                                    <td>{{customer.Lname}}</td>
                                    <td>{{customer.No}}</td>
                                    <td>{{customer.City}}</td>
                                    <td>{{customer.Street}}</td>
                                    <td>{{customer.NicNo}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</template>
<script>
    export default {
        date(){
            return{
                customers : {}
            }
        },
        methods: {
            loadCustomers(){
                axios.get("api/customer").then(({ data }) => (this.customers = data.data));
            }
        },
        created(){
            this.loadCustomers();
        }    
    }
</script>
<style>
#btn-add2{
    float: right;
}
</style>
