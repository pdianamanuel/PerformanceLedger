
<template>
    <div class="container">

        <div class="content-header" v-if="$gate.isEmployee()">
          <div class="container-fluid">
            <div class="row mb-s">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
              </div><!-- /.col -->
              <div class="col-sm-6 ML-AUTO">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active">Task Scheduler</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <div class="row justify-content-center mt-4" v-if="$gate.isEmployee()">
 
            <div class="col-md-12">

                <div class="modal-content">

                <div class="card">

                    <div class="card-header">
                        <i class = "float-sm-left">{{ currentDate | formatDate }}</i>
                        <i class= "nav-icon fa float-sm-right red">Note:  You must fill in all of the fields.</i>
                    </div>

                    <form @submit.prevent="Submit_Timeout">

                        <div class="modal-body">

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

    </div>
</template>

<script>

    export default {

        data() {
            return {
                currentDate: new Date(Date.now()),
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