// JavaScript Document

/*Validation for Add Passenger Details from center*/
$(document).ready(function() {
    $('#addPassengerDetailsForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    },
                    regexp: {
                        regexp: /^[A-Za-z ]*$/i,
                        message: 'The Name can consist of alphabets'
                    }
                }
            },
            mobile_no: {
                validators: {
                    notEmpty: {
                        message: 'The Mobile Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Mobile Number can consist of numeric'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The Mobile Number length must be 10'
                    }
                }
            },
            email: {
                 validators: {
                    notEmpty: {
                        message: 'The Email is required'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            address: {
                 validators: {
                    notEmpty: {
                        message: 'The Address is required'
                    },
                }
            },
            landline_number: {
                validators: {
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Landline Number can consist of numeric'
                    },
                }
            },
            licence: {
                validators: {
                    notEmpty: {
                        message: 'The licence Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9A-Z-]+$/i,
                        message: 'The Licence Number can consist of Alpha Numeric and "-"'
                    },
                }
            },
            relative_name: {
                validators: {
                    notEmpty: {
                        message: 'The Relative Name is required'
                    },
                    regexp: {
                        regexp: /^[A-Za-z ]*$/i,
                        message: 'The Relative Name can consist of alphabets'
                    },
                }
            },
            relative_address: {
                validators: {
                    notEmpty: {
                        message: 'The Relative Address is required'
                    },
                }
            },
            profile_pic: {
                validators: {
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    },
                }
            },
            driving_licence: {
                validators: {
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    },
                }
            },
            relative_phone_no: {
                validators: {
                    notEmpty: {
                        message: 'The Relative Phone Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Relative Phone Number can consist of numeric'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The Relative Phone Number length must be 10'
                    }
                }
            },
            bike_no: {
                validators: {
                    notEmpty: {
                        message: 'The Bike Number is required'
                    },
                }
            },
        }
    });
});

/*Validation for edit profile from center*/
$(document).ready(function() {
    $('#editProfileForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            licence: {
                validators: {
                    notEmpty: {
                        message: 'The licence Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9A-Z-]+$/i,
                        message: 'The Licence Number can consist of Alpha Numeric and "-"'
                    },
                }
            },
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    },
                    regexp: {
                        regexp: /^[A-Za-z ]*$/i,
                        message: 'The Name can consist of alphabets'
                    }
                }
            },
            mobile_no: {
                validators: {
                    notEmpty: {
                        message: 'The Mobile Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Mobile Number can consist of numeric'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The Mobile Number length must be 10'
                    }
                }
            },
            email: {
                 validators: {
                    notEmpty: {
                        message: 'The Email is required'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            address: {
                 validators: {
                    notEmpty: {
                        message: 'The Address is required'
                    },
                }
            },
            landline_number: {
                validators: {
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Landline Number can consist of numeric'
                    },
                }
            },
            profile_pic: {
                validators: {
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    },
                    /*notEmpty: {
                        message: 'The Profile Image is required'
                    },*/
                }
            },
            driving_licence: {
                validators: {
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    },
                    /*notEmpty: {
                        message: 'The Driving Licence is required'
                    },*/
                }
            },
            relative_name: {
                validators: {
                    notEmpty: {
                        message: 'The Relative Name is required'
                    },
                    regexp: {
                        regexp: /^[A-Za-z ]*$/i,
                        message: 'The Relative Name can consist of alphabets'
                    },
                }
            },
            relative_address: {
                validators: {
                    notEmpty: {
                        message: 'The Relative Address is required'
                    },
                }
            },
            relative_phone_no: {
                validators: {
                    notEmpty: {
                        message: 'The Relative Phone Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Relative Phone Number can consist of numeric'
                    },
                }
            },
            bike_no: {
                validators: {
                    notEmpty: {
                        message: 'The Bike Number is required'
                    },
                }
            },
        }
    });
});
$(document).ready(function() {
    $('#centerBikeSearchForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cityid: {
                validators: {
                    notEmpty: {
                        message: 'The City Name is required'
                    }
                }
            },
            pick_up_location: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Pick Up Location is required'
                    }
                }
            },
            drop_off_location: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Drop Off Location is required'
                    }
                }
            },
            pickup_dt: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Drop Off date and time is required'
                    }
                }
            },
            pickoff_dt: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Drop Off date and time is required'
                    }
                }
            }
        }
    });
});

$(document).ready(function() {
    $('#superadminLoginForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The Password is required'
                    }
                }
            }
        }
    });
});

$(document).ready(function() {
    $('#centerLoginForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            userid: {
                validators: {
                    notEmpty: {
                        message: 'The userid is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The Password is required'
                    }
                }
            }
        }
    });
});

/*Validation for Add City*/
$(document).ready(function() {
    $('#addCityForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            city_name: {
                validators: {
                    notEmpty: {
                        message: 'The city is required'
                    },
                    regexp: {
                        regexp: /^[a-z\s]+$/i,
                        message: 'The City can consist of alphabetical characters and spaces only'
                    }
                }
            }
        }
    });
});

/*Validation for Add Branch*/
$(document).ready(function() {
    $('#addCenterForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cityid: {
                validators: {
                    notEmpty: {
                        message: 'The city is required'
                    }
                }
            },
            center_name: {
                validators: {
                    notEmpty: {
                        message: 'The Center Name is required'
                    },
                    regexp: {
                        regexp: /^[a-z\s]+$/i,
                        message: 'The Center can consist of alphabetical characters and spaces only'
                    }
                }
            },
            email: {
                 validators: {
                    notEmpty: {
                        message: 'The Email is required'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The Address is required'
                    }
                }
            },
            contact_no: {
                validators: {
                    notEmpty: {
                        message: 'The Mobile Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Mobile Number can consist of numeric'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The Mobile Number length must be 10'
                    }
                }
            },
            userid: {
                validators: {
                    notEmpty: {
                        message: 'The User id is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The Password is required'
                    }
                }
            },
            confirm_password: {
                validators: {
                    notEmpty: {
                        message: 'The Confirm Password is required'
                    },
                    identical: {
                        field: 'password',
                        message: 'The Password and its confirm are not the same'
                    }
                }
            },
        }
    });
});

/*Validation for Add Vehicle Category*/
$(document).ready(function() {
    $('#addVehicleCategoryForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            vehicle_category_name: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Category Name is required'
                    }
                }
            }
        }
    });
});

/*Validation for Add vehicle Info*/
$(document).ready(function() {
    $('#addVehicleForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            vehiclecategoryid: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Category is required'
                    }
                }
            },
            vehicle_name: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Name is required'
                    }
                }
            },
            vehicle_description: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Description is required'
                    }
                }
            },
            /*day1: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day One is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day2: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Two is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day3: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Three is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day4: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Four is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day5: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Five is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day6: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Six is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day7: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Seven is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day8: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Eaght is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day9: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Nine is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day10: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Ten is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day11: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Eleven is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day12: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Twelve is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day13: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Therteen is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day14: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Fourteen is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day15: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day Fifteen is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            
            day16: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 16 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day17: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 17 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day18: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 18 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day19: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 19 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day20: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 20 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day21: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 21 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day22: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 22 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day23: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 23 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day24: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 24 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day25: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 25 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day26: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 26 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day27: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 27 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day28: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 28 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day29: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 29 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },
            day30: {
                validators: {
                    notEmpty: {
                        message: 'The Price of Day 30 is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Price can consist of numeric'
                    }
                }
            },*/
            deposit_ammount: {
                validators: {
                    notEmpty: {
                        message: 'The Deposit Ammount is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Deposite Ammount can consist of numeric'
                    }
                }
            }
        }
    });
});
/*Validation for Add Bike Info*/
$(document).ready(function() {
    $('#addBikeInfoForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            bike_name: {
                validators: {
                    notEmpty: {
                        message: 'The Bike Name is required'
                    }
                }
            },
            model_no: {
                validators: {
                    notEmpty: {
                        message: 'The Model Number is required'
                    }
                }
            },
            price: {
                validators: {
                    notEmpty: {
                        message: 'The Price is required'
                    }
                }
            },
            image: {
                validators: {
                    notEmpty: {
                        message: 'The Bike Image is required'
                    }
                }
            }
        }
    });
});
/*Validation for Add Scooter Info*/
$(document).ready(function() {
    $('#addScooterInfoForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            scooter_name: {
                validators: {
                    notEmpty: {
                        message: 'The Scooter Name is required'
                    }
                }
            },
            model_no: {
                validators: {
                    notEmpty: {
                        message: 'The Model Number is required'
                    }
                }
            },
            price: {
                validators: {
                    notEmpty: {
                        message: 'The Price is required'
                    }
                }
            },
            image: {
                validators: {
                    notEmpty: {
                        message: 'The Scooter Image is required'
                    }
                }
            }
        }
    });
});
/*Validation for Register*/
$(document).ready(function() {
    $('#registerForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            full_name: {
                validators: {
                    notEmpty: {
                        message: 'The Full Name is required'
                    },
                    regexp: {
                        regexp: /^[a-z\s]+$/i,
                        message: 'The Full Name can consist of alphabetical characters and spaces only'
                    }
                }
            },
            user_name: {
                validators: {
                    notEmpty: {
                        message: 'The User Name is required'
                    },
                    regexp: {
                        regexp: /^[a-z\s]+$/i,
                        message: 'The User Name can consist of alphabetical characters and spaces only'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The Address is required'
                    }
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'The Mobile Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Mobile Number can consist of numeric'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The Mobile Number length must be 10'
                    }
                }
            },
            email: {
                 validators: {
                    notEmpty: {
                        message: 'The Email is required'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The Password is required'
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'Accept Terms and Conditions'
                    },
                }
            },
       }
    });
});

/*Validation for Allocation Info*/
$(document).ready(function() {
    $('#allotationForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cityid: {
                validators: {
                    notEmpty: {
                        message: 'The City Name is required'
                    }
                }
            },
            vehiclecategoryid: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Categoty is required'
                    }
                }
            },
            vehicleid: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Type is required'
                    }
                }
            },
            vehicle_quantity: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Quantity is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Vehicle Quantity can consist of numeric'
                    }
                }
            }
        }
    });
});

/*Validation for VIP Booking*/
$(document).ready(function() {
    $('#vipBookingForm').formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cityid: {
                validators: {
                    notEmpty: {
                        message: 'The City Name is required'
                    }
                }
            },
            vehicleid: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle is required'
                    }
                }
            },
            pick_up_location: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Pick Up Location is required'
                    }
                }
            },
            drop_off_location: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Drop Off Location is required'
                    }
                }
            },
            pickup_dt: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Drop Off date and time is required'
                    }
                }
            },
            pickoff_dt: {
                validators: {
                    notEmpty: {
                        message: 'The Vehicle Drop Off date and time is required'
                    }
                }
            }
        }
    });
});