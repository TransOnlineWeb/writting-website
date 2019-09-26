<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">My Orders</h3>
                        <div class="card-tools">
                            <a href="/task"><button class="btn btn-success pull-left">Add new order &nbsp;<i class="fas fa-plus"></i></button></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Topic</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                    <th>More</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="order in orders" :key="order.id">
                                    <td>#{{order.id}}</td>
                                    <td>{{order.title}}</td>
                                    <td>{{order.subject_name}}</td>
                                    <td>
                                        <span class="badge badge-pill badge-warning" v-if="order.status == 'Pending'">Pending..</span>
                                        <span class="badge badge-pill badge-info" v-if="order.status == 'Paid'">Paid</span>
                                        <span class="badge badge-pill badge-dark" v-if="order.status == 'Working'">Working</span>
                                        <span class="badge badge-pill badge-primary" v-if="order.status == 'Completed'">Completed</span>
                                        <span class="badge badge-pill badge-success" v-if="order.status == 'Approved'">Approved</span>
                                        <span class="badge badge-pill badge-danger" v-if="order.status == 'Revision'">Revision</span>
                                    </td>
                                    <td><i class="fa fa-clock-o mr-1"></i>{{order.deadline_datetime | myDate}}</td>
                                    <td>
                                        <router-link :to="{path:'/MyOrderDetails/'+ order.id}" type="button" class="btn btn-primary btn-sm">More</router-link>
                                    </td>
                                    <td>
                                        <a href="#" @click="editModal(order, order.id)">
                                            <i class="fa fa-pen p-1 text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addnewLabel">Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateStatus()">
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Select Option</label>
                                <select name="status" v-model="form.status" class="form-control" :class="{'is-invalid': form.errors.has('status')}">
                                    <option value="">--Select Status--</option>
                                    <option value="Approved">Approve submitted Work</option>
                                    <option value="Revision">Order Revision</option>
                                </select>
                                <has-error :form="form" field="status"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:{
            user: {
                type: Object,
                required: true
            }
        },
        data(){
            return{
                orders: {},
                form: new Form({
                    status: '',
                    id: ''
                })
            }
        },
        mounted() {
            Echo.private(`message.${this.user.id}`)
                .listen('ChatEvent',(e)=>{
                    this.$emit('newMessage', e.message);
                })
        },
        methods:{
            getOrders(){
                axios.get("api/student-task").then(({ data }) => ([this.orders = data]));
            },
            editModal(order, id){
                $('#addnew').modal('show');
                this.form.fill(order);
                this.form.id = id;
            },
            updateStatus(){
                this.form.put('api/task/' + this.form.id)
                    .then(()=>{
                        $('#addnew').modal('hide');
                        swal.fire(
                            'Updated!',
                            'Status has been updated.',
                            'success'
                        )
                        Fire.$emit('entry');
                    })
                    .catch(()=>{

                    })
            },

            editModal(order, id){
                $('#addnew').modal('show');
                this.form.fill(order);
                this.form.id = id;
            },
            updateStatus(){
                this.form.put('api/task/' + this.form.id)
                    .then(()=>{
                        $('#addnew').modal('hide');
                        swal.fire(
                            'Updated!',
                            'Status has been updated.',
                            'success'
                        )
                        Fire.$emit('entry');
                    })
                    .catch(()=>{

                    })
            }
        },
        created() {
            this.getOrders();
        }
    }
</script>
