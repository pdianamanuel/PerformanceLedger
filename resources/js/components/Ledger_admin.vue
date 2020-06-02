<template>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"></div>

                    <form @submit.prevent="Submit_Timeout">

                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-9">
                                    <label for="employee">Employee Name</label>
                                    <select v-model="form.employee" name="employee" class="form-control" :class="{ 'is-invalid': form.errors.has('employee') }" id="employee" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                    </select>
                                    <has-error :form="form" field="employee"></has-error>
                                </div>
                                <div class="col-3">
                                    <label for="employeeid">ID</label>
                                    <input type="text" name="employeeid" class="form-control" id="employeeid" readonly>
                                </div>
                            </div>

                            <h6 class="text-center mt-5"><b>WEEKLY TASK SCHEDULER</b></h6><hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label>June 01, 2020 (DAY 1)</label>
                                    <label for="mow1" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow1" name="mow1" class="form-control" :class="{ 'is-invalid': form.errors.has('mow1') }" id="mow1" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                    </select>
                                    <has-error :form="form" field="mow1"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.day1" name="day1" class="form-control" :class="{ 'is-invalid': form.errors.has('day1') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="day1"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label>June 02, 2020 (DAY 2)</label>
                                    <label for="mow2" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow2" name="mow2" class="form-control" :class="{ 'is-invalid': form.errors.has('mow2') }" id="mow2" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                    </select>
                                    <has-error :form="form" field="mow2"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.day2" name="day2" class="form-control" :class="{ 'is-invalid': form.errors.has('day2') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="day2"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label>June 03, 2020 (DAY 3)</label>
                                    <label for="mow3" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow3" name="mow3" class="form-control" :class="{ 'is-invalid': form.errors.has('mow3') }" id="mow3" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                    </select>
                                    <has-error :form="form" field="mow3"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.day3" name="day3" class="form-control" :class="{ 'is-invalid': form.errors.has('day3') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="day3"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label>June 04, 2020 (DAY 5)</label>
                                    <label for="mow3" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow3" name="mow3" class="form-control" :class="{ 'is-invalid': form.errors.has('mow3') }" id="mow3" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                    </select>
                                    <has-error :form="form" field="mow3"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.day3" name="day3" class="form-control" :class="{ 'is-invalid': form.errors.has('day3') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="day3"></has-error>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label>June 05, 2020 (DAY 5)</label>
                                    <label for="mow5" class="mt-3">Mode of Work</label>
                                    <select v-model="form.mow5" name="mow5" class="form-control" :class="{ 'is-invalid': form.errors.has('mow5') }" id="mow5" required>
                                        <option value="" selected disabled>Please Choose...</option>
                                    </select>
                                    <has-error :form="form" field="mow5"></has-error>
                                </div>
                                <div class="col-9">
                                    <textarea rows="5" v-model="form.day5" name="day5" class="form-control" :class="{ 'is-invalid': form.errors.has('day5') }" minlength="5" maxlength="2000" placeholder="It imposes a limit of 2000 characters." required></textarea>
                                    <has-error :form="form" field="day5"></has-error>
                                </div>
                            </div>

                            <hr>
                            
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

<script>

    export default {

        data() {
            return {
                form: new Form({

                    employee : '',
                    mow1 : '',
                    day1: '',
                    mow2 : '',
                    day2: '',
                    mow3 : '',
                    day3: '',
                    mow4 : '',
                    day4: '',
                    mow5 : '',
                    day5: ''

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


 