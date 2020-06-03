
<template>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">June 03, 2020</div>

                    <form @submit.prevent="Submit_Timeout">

                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-9">
                                    <!-- <label for="employee">Name</label>
                                    <input v-model="form.employee" type="text" name="employee" class="form-control" :class="{ 'is-invalid': form.errors.has('employee') }" id="employee" readonly>
                                    <has-error :form="form" field="employee"></has-error> -->
                                    <label for="employee">Name</label>
                                    <input type="text" name="employee" class="form-control" value="Dianne Manuel" id="employee" readonly></i>
                                </div>
                                <div class="col-3">
                                    <label for="employeeid">ID</label>
                                    <input type="text" name="employeeid" class="form-control" value="1" id="employeeid" readonly>
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-3">
                                    <label for="mow">Mode of Work</label>
                                    <select v-model="form.mow" name="mow" class="form-control mt-2" :class="{ 'is-invalid': form.errors.has('mow') }" id="mow" required>
                                        <option value="" selected>Work-from-Home</option>
                                        <option value="Field">Field</option>
                                        <option value="Office">Office</option>
                                    </select>
                                    <has-error :form="form" field="mow"></has-error>
                                </div>

                                <div class="col-3">
                                    <a href="#" class="form-control btn btn-info">
                                      <b>TIME-IN</b>
                                    </a>
                                    <input type="time" name="timeout" max="23:00" class="form-control mt-1" id="timeout" readonly>
                                </div>
                                <div class="col-3">
                                    <a href="#" class="form-control btn btn-info" style="pointer-events: none;">
                                      <b>TIME-OUT</b>
                                    </a>
                                    <input type="time" name="timeout" max="23:00" class="form-control mt-1" id="timeout" readonly>
                                </div>
                                <div class="col-3">
                                    <label for="nohours">NO. OF HOURS</label>
                                    <input type="number" step="any" name="nohours" class="form-control mt-2" id="nohours" readonly>
                                </div>
                            </div>

                            <br><hr>

                            <div class="form-group">
                                <label for="dailytask">DAILY TASK</label>
                                <textarea rows="5" type="text" name="dailytask" class="form-control" id="dailytask" readonly></textarea>
                            </div>

                            <div class="form-group">
                                <label for="output">OUTPUT</label>
                                <textarea rows="5" v-model="form.output" name="output" class="form-control" :class="{ 'is-invalid': form.errors.has('output') }" id="output" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                <has-error :form="form" field="employee"></has-error>
                            </div>
                            
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class = "btn btn-primary">SUBMIT AND TIME-OUT</button> 
                            <!-- email code here -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                form: new Form({

                    output : '',
                    mow: ''

                })
            }
        } ,

        methods: {
            Submit_Timeout(){

                this.form.post('api/user');

            }
        }, 
        mounted() {
            console.log('Component mounted.')
        }
    };
   
</script>