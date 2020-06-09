<template>

    <div class="container">

        <div class="content-header" v-if="$gate.isAdmin()">
          <div class="container-fluid">
            <div class="row mb-s">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
              </div><!-- /.col -->
              <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active">Task Scheduler</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <div class="row justify-content-center mt-4" v-if="$gate.isAdmin()">

            <div class="col-md-12">

                <div class="modal-content">

                <div class="card">

                    <div class="card-header">
                        <i class = "float-sm-left">{{ currentDate | formatDate }}</i>
                        <i class= "nav-icon fa float-sm-right red">Note:  You must fill in all of the fields.</i>
                    </div>

                    <form @submit.prevent="Create_Task_Admin">

                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-9">
                                    <label for="employee">Employee Name</label>
                                    <select v-model="form.employee" name="employee" class="form-control" :class="{ 'is-invalid': form.errors.has('employee') }" id="employee">
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option v-for="employee in employees" :value="employee.id">{{ employee.name }}</option>
                                    </select>
                                    <has-error :form="form" field="employee"></has-error>
                                </div>
                                
                                <div class="col-3">
                                    <label for="employeeid">ID</label>
                                    <input v-model="form.employee" name="employeeid" class="form-control" :class="{ 'is-invalid': form.errors.has('employeeid') }" readonly>
                                    <has-error :form="form" field="employeeid"></has-error>
                                </div>
                
                            </div>

                            <h6 class="text-center mt-5"><b>WEEKLY TASK SCHEDULER</b></h6><hr>
                            
                            <div class="form-group row">

                                <div class="col-4">
                                    <label for="date1" class="mt-3">Date</label>
                                    <b-form-datepicker
                                        v-model="form.date1"
                                        :format="DatePickerFormat"
                                        :date-disabled-fn="dateDisabled" size="sm" class="form-control" name="date1" value="" placeholder="Select date" id="date1" :class="{ 'is-invalid': form.errors.has('date1') }">
                                    </b-form-datepicker>
                                    <has-error :form="form" field="date1"></has-error>

                                    <label for="mow1" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow1" name="mow1" class="form-control" :class="{ 'is-invalid': form.errors.has('mow1') }" id="mow1">
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option v-for="modeofwork in modeofworks" :value="modeofwork.id">{{ modeofwork.ModeOfWork }}</option>
                                    </select>
                                    <has-error :form="form" field="mow1"></has-error>
                                </div>
                                <div class="col-8">
                                    <textarea rows="7" v-model="form.task1" name="task1" class="form-control" :class="{ 'is-invalid': form.errors.has('task1') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters."></textarea>
                                    <has-error :form="form" field="task1"></has-error>
                                </div>

                            </div>

                            <hr>

                            <div class="form-group row">

                                <div class="col-4">

                                    <label for="date2" class="mt-3">Date</label>
                                    <b-form-datepicker
                                        v-model="form.date2"
                                        :format="DatePickerFormat"
                                        :date-disabled-fn="dateDisabled" size="sm" class="form-control" name="date2" value="" placeholder="Select date" id="date2" :class="{ 'is-invalid': form.errors.has('date2') }">
                                    </b-form-datepicker>
                                    <has-error :form="form" field="date2"></has-error>
                                    
                                    <label for="mow2" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow2" name="mow2" class="form-control" :class="{ 'is-invalid': form.errors.has('mow2') }" id="mow2">
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option v-for="modeofwork in modeofworks" :value="modeofwork.id">{{ modeofwork.ModeOfWork }}</option>
                                    </select>
                                    <has-error :form="form" field="mow2"></has-error>
                                </div>
                                <div class="col-8">
                                    <textarea rows="7" v-model="form.task2" name="task2" class="form-control" :class="{ 'is-invalid': form.errors.has('task2') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters."></textarea>
                                    <has-error :form="form" field="task2"></has-error>
                                </div>

                            </div>

                            <hr>

                            <div class="form-group row">

                                <div class="col-4">

                                    <label for="date3" class="mt-3">Date</label>
                                    <b-form-datepicker
                                        v-model="form.date3"
                                        :format="DatePickerFormat"
                                        :date-disabled-fn="dateDisabled" size="sm" class="form-control" name="date3" value="" placeholder="Select date" id="date3" :class="{ 'is-invalid': form.errors.has('date3') }">
                                    </b-form-datepicker>
                                    <has-error :form="form" field="date3"></has-error>
                                    
                                    <label for="mow3" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow3" name="mow3" class="form-control" :class="{ 'is-invalid': form.errors.has('mow3') }" id="mow3">
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option v-for="modeofwork in modeofworks" :value="modeofwork.id">{{ modeofwork.ModeOfWork }}</option>
                                    </select>
                                    <has-error :form="form" field="mow3"></has-error>
                                </div>
                                <div class="col-8">
                                    <textarea rows="7" v-model="form.task3" name="task3" class="form-control" :class="{ 'is-invalid': form.errors.has('task3') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters."></textarea>
                                    <has-error :form="form" field="task3"></has-error>
                                </div>

                            </div>

                            <hr>

                            <div class="form-group row">

                                <div class="col-4">

                                    <label for="date4" class="mt-3">Date</label>
                                    <b-form-datepicker
                                        v-model="form.date4"
                                        :format="DatePickerFormat"
                                        :date-disabled-fn="dateDisabled" size="sm" class="form-control" name="date4" value="" placeholder="Select date" id="date4" :class="{ 'is-invalid': form.errors.has('date4') }">
                                    </b-form-datepicker>
                                    <has-error :form="form" field="date4"></has-error>
                                    
                                    <label for="mow4" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow4" name="mow4" class="form-control" :class="{ 'is-invalid': form.errors.has('mow4') }" id="mow4" >
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option v-for="modeofwork in modeofworks" :value="modeofwork.id">{{ modeofwork.ModeOfWork }}</option>
                                    </select>
                                    <has-error :form="form" field="mow4"></has-error>
                                </div>
                                <div class="col-8">
                                    <textarea rows="7" v-model="form.task4" name="task4" class="form-control" :class="{ 'is-invalid': form.errors.has('task4') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." ></textarea>
                                    <has-error :form="form" field="task4"></has-error>
                                </div>

                            </div>

                            <hr>

                            <div class="form-group row">

                                <div class="col-4">

                                    <label for="date5" class="mt-3">Date</label>
                                    <b-form-datepicker
                                        v-model="form.date5"
                                        :format="DatePickerFormat"
                                        :date-disabled-fn="dateDisabled" size="sm" class="form-control" name="date5" value="" placeholder="Select date" id="date5" :class="{ 'is-invalid': form.errors.has('date5') }">
                                    </b-form-datepicker>
                                    <has-error :form="form" field="date5"></has-error>
                                    
                                    <label for="mow5" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow5" name="mow5" class="form-control" :class="{ 'is-invalid': form.errors.has('mow5') }" id="mow5">
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option v-for="modeofwork in modeofworks" :value="modeofwork.id">{{ modeofwork.ModeOfWork }}</option>
                                    </select>
                                    <has-error :form="form" field="mow5"></has-error>
                                </div>
                                <div class="col-8">
                                    <textarea rows="7" v-model="form.task5" name="task5" class="form-control" :class="{ 'is-invalid': form.errors.has('task5') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters."></textarea>
                                    <has-error :form="form" field="task5"></has-error>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class = "btn btn-primary">SUBMIT</button> 
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

import Datepicker from 'vuejs-datepicker';

    export default {

        components: {
            Datepicker
        },

        data() {
            return {
                modeofworks: [],
                employees: [],
                currentDate: new Date(Date.now()),
                DatePickerFormat: 'yyyy-MM-dd',
                disabledDates: {
                  to: new Date(Date.now())
                },

                form: new Form({

                    employee: '',
                    employeeid : '',
                    mow1 : '',
                    date1 : '',
                    task1: '',
                    mow2 : '',
                    date2 : '',
                    task2: '',
                    mow3 : '',
                    date3 : '',
                    task3: '',
                    mow4 : '',
                    date4 : '',
                    task4: '',
                    mow5 : '',
                    date5 : '',
                    task5: ''

                })
            }
        } ,

        methods: {

            dateDisabled(ymd, date) {
        // Disable weekends (Sunday = `0`, Saturday = `6`) and
        // disable days that fall on the 13th of the month
                const weekday = date.getDay()
                const day = date.getDay()
        // Return `true` if the date should be disabled
                return weekday === 0 || weekday === 6
            } ,

            Create_Task_Admin(){

                // this.$Progress.start()
                this.form.post('api/taskadmin')
                .then(()=>{

                    const swalalert = Swal.mixin({
                      customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                      },
                      buttonsStyling: false
                    });

                    swalalert.fire({
                      title: 'Successfully Saved!',
                      text: "Do you want to add new task to another employee?",
                      icon: 'success',
                      showCancelButton: true,
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'I want to Logout',
                      reverseButtons: false
                    }).then((result) => {
                      if (result.value) {
                        location.reload()
                      } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                      ) {
                        axios.post('logout').then(function() {
                        location.reload();
                        })
                      }
                    });

                })
                .catch(()=>{

                });

            } 
        }, 
        created() {
            axios.get('api/taskadmin').then(response => this.modeofworks = response.data.modeofworks);
            axios.get('api/taskadmin').then(response => this.employees = response.data.employees);
        }
    };

</script>


 