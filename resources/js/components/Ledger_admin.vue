<template>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">June 03, 2020</div>

                    <form @submit.prevent="Create_Task_Admin">

                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-9">
                                    <label for="employee">Employee Name</label>
                                    <select v-model="form.employee" name="employee" class="form-control" :class="{ 'is-invalid': form.errors.has('employee') }" id="employee" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option value="Juan Dela Cruz">Juan Dela Cruz</option>
                                    </select>
                                    <has-error :form="form" field="employee"></has-error>
                                </div>
                                <div class="col-3">
                                    <label for="employeeid">ID</label>
                                    <input v-model="form.employeeid" name="employeeid" class="form-control" :class="{ 'is-invalid': form.errors.has('employeeid') }">
                                    <has-error :form="form" field="employeeid"></has-error>
                                </div>
                
                            </div>

                            <h6 class="text-center mt-5"><b>WEEKLY TASK SCHEDULER</b></h6><hr>
                            
                            <div class="form-group row">

                                <div class="col-3">

                                    <datepicker
                                        v-model="form.date1"
                                        :format="DatePickerFormat"
                                        :open-date="new Date()"
                                        :disabledDates="disabledDates"  name="day1" placeholder="Please select date" :class="{ 'is-invalid': form.errors.has('date1') }">
                                    </datepicker>
                                        <has-error :form="form" field="date1"></has-error>
                                    
                                    
                                    <label for="mow1" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow1" name="mow1" class="form-control" :class="{ 'is-invalid': form.errors.has('mow1') }" id="mow1" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option value="1">Work-from-Home</option>
                                        <option value="2">Field</option>
                                        <option value="3">Office</option>
                                        <option value="4">On-Leave</option>
                                        <option value="4">Holiday</option>
                                    </select>
                                    <has-error :form="form" field="mow1"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.task1" name="task1" class="form-control" :class="{ 'is-invalid': form.errors.has('task1') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="task1"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    
                                    <label for="mow2" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow2" name="mow2" class="form-control" :class="{ 'is-invalid': form.errors.has('mow2') }" id="mow2" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option value="1">Work-from-Home</option>
                                        <option value="2">Field</option>
                                        <option value="3">Office</option>
                                        <option value="4">On-Leave</option>
                                        <option value="4">Holiday</option>
                                    </select>
                                    <has-error :form="form" field="mow2"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.task2" name="task2" class="form-control" :class="{ 'is-invalid': form.errors.has('task2') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="task2"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    
                                    <label for="mow3" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow3" name="mow3" class="form-control" :class="{ 'is-invalid': form.errors.has('mow3') }" id="mow3" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option value="1">Work-from-Home</option>
                                        <option value="2">Field</option>
                                        <option value="3">Office</option>
                                        <option value="4">On-Leave</option>
                                        <option value="4">Holiday</option>
                                    </select>
                                    <has-error :form="form" field="mow3"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.task3" name="task3" class="form-control" :class="{ 'is-invalid': form.errors.has('task3') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="task3"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    
                                    <label for="mow4" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow4" name="mow4" class="form-control" :class="{ 'is-invalid': form.errors.has('mow4') }" id="mow4" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option value="1">Work-from-Home</option>
                                        <option value="2">Field</option>
                                        <option value="3">Office</option>
                                        <option value="4">On-Leave</option>
                                        <option value="4">Holiday</option>
                                    </select>
                                    <has-error :form="form" field="mow4"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.task4" name="task4" class="form-control" :class="{ 'is-invalid': form.errors.has('task4') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="task4"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    
                                    <label for="mow5" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow5" name="mow5" class="form-control" :class="{ 'is-invalid': form.errors.has('mow5') }" id="mow5" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                        <option value="1">Work-from-Home</option>
                                        <option value="2">Field</option>
                                        <option value="3">Office</option>
                                        <option value="4">On-Leave</option>
                                        <option value="4">Holiday</option>
                                    </select>
                                    <has-error :form="form" field="mow5"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.task5" name="task5" class="form-control" :class="{ 'is-invalid': form.errors.has('task5') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
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
</template>

<script >

import Datepicker from 'vuejs-datepicker'


    export default {

        components: {
            Datepicker
        },

        data() {
            return {

                model: {
          date: ''
        },
        DatePickerFormat: 'dd/MM/yyyy',
        disabledDates: {
          to: new Date(Date.now() + 2 * 86400000)
        } ,
                form: new Form({

                    employee: '',
                    employeeid : '',
                    mow1 : '',
                    date1: '',
                    task1: '',
                    mow2 : '',
                    task2: '',
                    mow3 : '',
                    task3: '',
                    mow4 : '',
                    task4: '',
                    mow5 : '',
                    task5: ''

                })
            }
        } ,

        methods: {

            Create_Task_Admin(){

                this.form.post('api/taskadmin');

            }
        }, 
        mounted() {
            console.log('Component mounted.')
        }
    };

</script>


 