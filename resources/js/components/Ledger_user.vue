<template>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">(Date)</div>

                    <form @submit.prevent="Submit_Timeout">

                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-9">
                                    <!-- <label for="employee">Name</label>
                                    <input v-model="form.employee" type="text" name="employee" class="form-control" :class="{ 'is-invalid': form.errors.has('employee') }" id="employee" readonly>
                                    <has-error :form="form" field="employee"></has-error> -->
                                    <label for="employee">Name</label>
                                    <input type="text" name="employee" class="form-control" value="" id="employee" readonly>
                                </div>
                                <div class="col-3">
                                    <label for="employeeid">ID</label>
                                    <input type="text" name="employeeid" class="form-control" id="employeeid" readonly>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="mow">Mode of Work</label>
                                    <input type="text" name="mow" class="form-control" id="mow" readonly>
                                </div>
                                <div class="col-3">
                                    <label for="timein">TIME-IN</label>
                                    <input type="time" name="timein" class="form-control" id="timein" readonly>
                                </div>
                                <div class="col-3">
                                    <label for="timeout">TIME-OUT</label>
                                    <input type="time" name="timeout" class="form-control" id="timeout" readonly>
                                </div>
                                <div class="col-3">
                                    <label for="nohours">NO. OF HOURS</label>
                                    <input type="number" step="any" name="nohours" class="form-control" id="nohours" readonly>
                                </div>
                            </div>

                            <br><br>

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


 