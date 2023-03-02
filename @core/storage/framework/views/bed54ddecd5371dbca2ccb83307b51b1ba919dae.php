<script>
    
    
    (function($) {
        'use strict';
    
    let site_currency_symbol = '<?php echo e(site_currency_symbol()); ?>';
    const cities = <?php echo json_encode($cities, 15, 512) ?>;
    let districts = [];
    let wards = [];
    function renderSelect(elementID, data){
        let html = elementID == "city" ? `<option value=""><?php echo e(__('Chọn Tỉnh/Thành')); ?></option>`
                                        : elementID == "district"
                                            ? `<option value=""><?php echo e(__('Chọn quận/huyện')); ?></option>`
                                            : `<option value=""><?php echo e(__('Chon phường/xã')); ?></option>`;
        data.forEach(ele => {
            html+= `<option value='${ele.id}'>${ele.name}</option>`;
        })
        $(`#${elementID}`).html(html);
    };
        $(document).ready(function() {
            $('#city').on('change', function(e){
                let val = $(this).val();
                let city = cities.find(o => o.id == val);
                districts=  city ? city.districts : [];
                renderSelect('district',districts );
            })

            $('#district').on('change', function(e){
                let val = $(this).val();
                let district = districts.find(o => o.id == val);
                wards = district ? district.wards : [];
                renderSelect('ward',wards );
            })

            if ($('input[name=coupon]').val() != undefined && $('input[name=coupon]').val().length) {
                $('.coupon_section').removeClass('d-none');
            }

            if ($('.discount-coupon input[name=coupon]').val().length) {
                submitCoupon('<?php echo e(route("frontend.checkout.apply.coupon")); ?>', $('.discount-coupon input[name=coupon]').val());
            }

            $('.toggle_coupon').on('click', function(e) {
                e.preventDefault();
                if ($('.coupon_section').hasClass('d-none')) {
                    $('.coupon_section').removeClass('d-none').hide().slideDown(500);
                } else {
                    $('.coupon_section').slideUp(500);
                    setTimeout(function() {
                        $('.coupon_section').addClass('d-none');
                        $('input[name=coupon]').val('');
                    }, 600);
                }
            });

            $('#toggle_login').on('click', function(e) {
                e.preventDefault();
                if ($('#login_container').hasClass('d-none')) {
                    $('#login_container').removeClass('d-none').hide().slideDown(500);
                } else {
                    $('#login_container').slideUp(500);
                    setTimeout(function() {
                        $('#login_container').addClass('d-none');
                    }, 600);
                }
            });

            $('#create_account').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#username').parent().fadeIn(500);
                    $('#password').parent().fadeIn(500);
                    $('#confirm_password').parent().fadeIn(500);
                } else {
                    $('#username').parent().fadeOut(500);
                    $('#password').parent().fadeOut(500);
                    $('#confirm_password').parent().fadeOut(500);
                }
            });

            
            
            
            
            
            
            
            
            

            

            
            
            

            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            $(document).on('change', '.shipping-option', function () {
                let amount = $(this).data('amount');
                $('#shipping_charge').text(site_currency_symbol + amount);
            });

            $(document).on('change', 'input.shipping_option', function (event) {
                let subtotal = Number($('#subtotal').data('amount'));
                let min_order_amt = Number($(this).data('minimumAmt'));
                if (subtotal == min_order_amt) {
                    $('#shipping_charge').text(site_currency_symbol + Number($(this).data('amount')));
                }
                let shipping_option = $(this).val();
                $('input[name=selected_shipping_option]').val(shipping_option);
                validateShipping(this, event);
                syncPrices();
            });

            
            
            
            
            

            

            
            
            

            
            
            

            
            
            
            
            
            
            

            
            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            

            $(document).on('click', '#login_btn', function(e) {
                e.preventDefault();
                var formContainer = $('#login_form_order_page');
                var el = $(this);
                var username = formContainer.find('input[name="username"]').val();
                var password = formContainer.find('input[name="password"]').val();
                var remember = formContainer.find('input[name="remember"]').val();

                el.text('Please Wait');

                $.ajax({
                    type: 'post',
                    url: "<?php echo e(route('user.ajax.login')); ?>",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        username: username,
                        password: password,
                        remember: remember,
                    },
                    success: function(data) {
                        if (data.status == 'invalid') {
                            el.text('Login')
                            formContainer.find('.error-wrap').html(
                                '<div class="alert alert-danger">' + data.msg +
                                '</div>');
                        } else {
                            formContainer.find('.error-wrap').html('');
                            el.text('Login Success.. Redirecting ..');
                            location.reload();
                        }
                    },
                    error: function(data) {
                        var response = data.responseJSON.errors;
                        formContainer.find('.error-wrap').html(
                            '<ul class="alert alert-danger"></ul>');
                        $.each(response, function(value, index) {
                            formContainer.find('.error-wrap ul').append('<li>' +
                                index + '</li>');
                        });
                        el.text('Login');
                    }
                });
            });

            $(document).on('click', '.payment-gateway-wrapper > ul > li', function(e) {
                e.preventDefault();
                var gateway = $(this).data('gateway');

                $('.manual_payment_transaction_field').hide();
                $('.bank_payment_transaction_field').hide();
                $('.cheque_payment_transaction_field').hide();

                if (gateway == 'manual_payment') {
                    $('.manual_payment_transaction_field').show();
                } else if (gateway == 'bank_payment') {
                    $('.bank_payment_transaction_field').show();
                } else if (gateway == 'cheque_payment') {
                    $('.cheque_payment_transaction_field').show();
                }

                $(this).addClass('selected').siblings().removeClass('selected');
                $('.payment-gateway-wrapper').find(('input')).val(gateway);
            });

            $('#ship_another_address').on('change', function() {
                if ($('#ship_another_address').is(':checked')) {
                    $('#user_shipping_address_container').slideDown(500);
                } else {
                    $('#user_shipping_address_container').slideUp(500);
                }
            });

            $('.user_shipping_address').on('click', function() {
                $('#shipping_address_id').val($(this).data('id'))
            });

            $('#new_user_shipping_address_form_submit_btn').on('click', function(e) {
                e.preventDefault();
                $('.lds-ellipsis').show();
                $.ajax({
                    url: '<?php echo e(route('frontend.add.user.shipping.address')); ?>',
                    type: 'POST',
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        name: $('#user_shipping_name').val(),
                        address: $('#user_shipping_address').val(),
                    },
                    success: function(data) {
                        $('#all_user_shipping_address_container').html(data);
                        $('.lds-ellipsis').hide();
                        $('#user_shipping_name').val('');
                        $('#user_shipping_address').val('');
                    },
                    error: function(err) {
                        toastr.error('<?php echo e(__('An error occurred')); ?>');
                        $('.lds-ellipsis').hide();
                    }
                });
            });

            $('.discount-coupon').on('submit', function(e) {
                e.preventDefault();
                let url = $(this).attr('action');
                let coupon = $(this).find('input[name=coupon]').val();

                $('.lds-ellipsis').show();
                $('#coupon_code').val(coupon); // for shipping code
                $('#discount_summery').hide();
                $('#discount_summery #coupon_amount').html(site_currency_symbol + 0);

                submitCoupon(url, coupon);
            });

            $(document).on('click', 'input[name=display_shipping_option]', function (e) {
                syncPrices();
            });
        });
        
    })(jQuery)

    function syncPrices() {
        // if shipping is taxable, include shipping in calculation
        let country = $('#country').val();
        let state = $('#state').val();
        let coupon = $('.discount-coupon input[name=coupon]').val();
        let selected_shipping_option = $('input[name=display_shipping_option]:checked').val();
        console.log(selected_shipping_option);
        $('.lds-ellipsis').show();

        $.get('<?php echo e(route("frontend.checkout.calculate")); ?>', {
            country: country,
            state: state,
            coupon: coupon,
            selected_shipping_option: selected_shipping_option,
        }).then(function (data) {
            $('.lds-ellipsis').hide();

            if (data.type && data.type == 'danger') {
                return toastr.error(data.msg);
            }

            if (data.subtotal != undefined) {
                $('#subtotal').text(site_currency_symbol + data.subtotal);
            }

            if (data.selected_shipping_cost != undefined) {
                $('#shipping_charge').text(site_currency_symbol + data.selected_shipping_cost);
            }

            if (data.tax_amount != undefined) {
                $('#tax_amount').text(site_currency_symbol + data.tax_amount);
            }

            if (data.coupon_amount != undefined) {
                $('#coupon_amount').text(site_currency_symbol + data.coupon_amount);
            }

            if (data.total != undefined) {
                $('#total_amount').text(site_currency_symbol + data.total);
            }
        }).catch(function (err) {
            $('.lds-ellipsis').hide();

            if (err.responseJSON.errors != undefined) {
                Object.keys(err.responseJSON.errors).forEach(function(i) {
                    if (Array.isArray(err.responseJSON.errors[i])) {
                        toastr.error(err.responseJSON.errors[i][0]);
                    }
                });
            }
        });
    }

    function submitCoupon(url, coupon) {
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                coupon: coupon,
            },
            success: function(data) {
                $('.lds-ellipsis').hide();
                if (data.type == 'success') {
                    toastr.success('<?php echo e(__('Coupon applied')); ?>');
                    $('#coupon_amount').text(site_currency_symbol + data.coupon_amount);
                    $('#coupon_code').val(coupon);
                    $('#discount_summery').show();
                } else {
                    toastr.error('<?php echo e(__('Coupon invalid')); ?>');
                }
                calculateTotal();
            },
            error: function(err) {
                $('.lds-ellipsis').hide();
                toastr.error('<?php echo e(__('Something went wrong')); ?>');
            }
        });
    }

    function calculateTotal() {
        let subtotal = Number($('#subtotal').text().trim().replace(site_currency_symbol, ''));
        let shipping_charge = Number($('#shipping_charge').text().trim().replace(site_currency_symbol, ''));
        let tax_amount = Number($('#tax_amount').text().trim().replace(site_currency_symbol, ''));
        let coupon_amount = Number($('#coupon_amount').text().trim().replace(site_currency_symbol, '').replace('(-)', ''));
        let total_amount = Number($('#total_amount').text().trim().replace(site_currency_symbol, ''));

        total_amount = subtotal + shipping_charge + tax_amount - coupon_amount;

        $('#total_amount').text(site_currency_symbol + total_amount.toFixed(2));
        $('input[name=tax_amount]').val(tax_amount);
    }

    function validateShipping(context) {
        let data = $(context).data();
        let subtotal = Number($('#subtotal').text().trim().replace(site_currency_symbol, ''));
        
        if (subtotal < data['minimumAmt']) {
            toastr.error('<?php echo e(get_static_option("shipping_option_invalid_msg")); ?>');
        }
    }

    function capitalize(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function submitCheckout() {
        let data = {
            name: $('input[name=name]').val(),
            email: $('input[name=email]').val(),
            phone: $('input[name=phone]').val(),
            address: $('input[name=address]').val(),
            city: $('input[name=city]').val(),
            zipcode: $('input[name=zipcode]').val(),
            order_note: $('textarea[name=order_note]').val()
        }
    }
</script>
<?php /**PATH C:\laragon\www\lvbeauty\@core\resources\views/frontend/partials/scripts/checkout-scripts.blade.php ENDPATH**/ ?>