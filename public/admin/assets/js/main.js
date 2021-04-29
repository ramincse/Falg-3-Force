(function ($) {
    $(document).ready(function () {
        /**
         * Logout Button
         */
        $(document).on('click', '#logout-button', function (e) {
            e.preventDefault();
            $('#logout_form').submit();
           //alert();
        });

        /**
         * Slider Image Load
         */
        $(document).on('change', '#slider_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#slider_photo_load').attr('src', file_url);
        });

        /**
         * Slider Update Image Load
         */
        $(document).on('change', '#slider_new_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#slider_new_photo_load').attr('src', file_url);
        });

        /**
         * Slider Switcher
         */
        $(document).on('change', '.slider_switcher', function () {
            let status_id = $(this).attr('status_id');

            $.ajax({
                url: '/slider-status-update/' + status_id,
                success: function (data) {
                    swal('Slider status updated Successfull!');
                }
            });

        });

        /**
         * Slider Update
         */
        $(document).on('click', '.edit_slider', function(e){
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'slider/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_slider_modal form input[name="id"]').val(data.id);
                    $('#update_slider_modal form input[name="title"]').val(data.title);
                    $('#update_slider_modal form input[name="sub_title"]').val(data.sub_title);
                    $('#update_slider_modal form input[name="btn_text"]').val(data.btn_text);
                    $('#update_slider_modal img#slider_new_photo_load').attr('src', 'media/slider/' + data.photo);
                    $('#update_slider_modal').modal('show');
                }
            });
        });

        /**
         * Portfolio Image Load
         */
        $(document).on('change', '#portfolio_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#portfolio_photo_load').attr('src', file_url);
        });

        /**
         * Portfolio Switcher
         */
        $(document).on('change', '.portfolio_switcher', function (e) {
            e.preventDefault();
            let status_id = $(this).attr('status_id');
            $.ajax({
                url: '/portfolio-status-update/' + status_id,
                success: function (data) {
                    swal('Portfolio status updated Successfull!');
                }
            });
        });

        /**
         * Portfolio Edit
         */
        $(document).on('click', '.edit_portfolio', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'portfolio/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_portfolio_modal form input[name="id"]').val(data.id);
                    $('#update_portfolio_modal form input[name="title"]').val(data.title);
                    $('#update_portfolio_modal img#portfolio_new_photo_load').attr('src', 'media/portfolio/' + data.photo);
                    $('#update_portfolio_modal').modal('show');
                }
            });
        });

        /**
         * Portfolio Update Image Load
         */
        $(document).on('change', '#portfolio_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#portfolio_new_photo_load').attr('src', file_url);
        });

        /**
         * Service Image Load
         */
        $(document).on('change', '#service_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#service_photo_load').attr('src', file_url);
        });

        /**
        * Service Switcher
        */
        $(document).on('change', '.service_switcher', function (e) {
            e.preventDefault();
            let status_id = $(this).attr('status_id');
            $.ajax({
                url: '/service-status-update/' + status_id,
                success: function (data) {
                    swal('Service status updated Successfull!');
                }
            });
        });

        /**
         * Service Edit
         */
        $(document).on('click', '.edit_service', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'service/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_service_modal form input[name="id"]').val(data.id);
                    $('#update_service_modal form input[name="title"]').val(data.title);
                    $('#update_service_modal img#service_new_photo_load').attr('src', 'media/service/' + data.photo);
                    $('#update_service_modal').modal('show');
                }
            });
        });

        /**
         * Service Update Image Load
         */
        $(document).on('change', '#service_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#service_new_photo_load').attr('src', file_url);
        });

        /**
         * Security Service Image Load
         */
        $(document).on('change', '#fsservice_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#fsservice_photo_load').attr('src', file_url);
        });

        /**
        * Security Service Switcher
        */
        $(document).on('change', '.fsservice_switcher', function (e) {
            e.preventDefault();
            let status_id = $(this).attr('status_id');
            $.ajax({
                url: '/fsservice-status-update/' + status_id,
                success: function (data) {
                    swal('Service status updated Successfull!');
                }
            });
        });

        /**
         * Security Service Edit
         */
        $(document).on('click', '.edit_fsservice', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'fsservice/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_fsservice_modal form input[name="id"]').val(data.id);
                    $('#update_fsservice_modal form input[name="title"]').val(data.title);
                    $('#update_fsservice_modal form input[name="sub_title"]').val(data.sub_title);
                    $('#update_fsservice_modal form textarea[name="content"]').text(data.content);
                    $('#update_fsservice_modal img#fsservice_new_photo_load').attr('src', 'media/fsservice/' + data.photo);
                    $('#update_fsservice_modal form input[name="photo_name"]').val(data.photo_name);
                    $('#update_fsservice_modal').modal('show');
                }
            });
        });

        /**
         * Security Service Update Image Load
         */
        $(document).on('change', '#fsservice_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#fsservice_new_photo_load').attr('src', file_url);
        });

        /**
         * Testimonial Image Load
         */
        $(document).on('change', '#testimonial_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#testimonial_photo_load').attr('src', file_url);
        });

        /**
        * Testimonial Service Switcher
        */
        $(document).on('change', '.testimonial_switcher', function (e) {
            e.preventDefault();
            let status_id = $(this).attr('status_id');
            $.ajax({
                url: '/testimonial-status-update/' + status_id,
                success: function (data) {
                    swal('Testimonial status updated Successfull!');
                }
            });
        });

        /**
         * Security Service Edit
         */
        $(document).on('click', '.edit_testimonial', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'testimonial/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_testimonial_modal form input[name="id"]').val(data.id);
                    $('#update_testimonial_modal form input[name="title"]').val(data.title);
                    $('#update_testimonial_modal img#testimonial_new_photo_load').attr('src', 'media/testimonial/' + data.photo);
                    $('#update_testimonial_modal').modal('show');
                }
            });
        });

        /**
         * Security Service Update Image Load
         */
        $(document).on('change', '#testimonial_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#testimonial_new_photo_load').attr('src', file_url);
        });

        /**
         * Featured Clients Image Load
         */
        $(document).on('change', '#client_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#client_photo_load').attr('src', file_url);
        });

        /**
        * Featured Clients Switcher
        */
        $(document).on('change', '.client_switcher', function (e) {
            e.preventDefault();
            let status_id = $(this).attr('status_id');
            $.ajax({
                url: '/client-status-update/' + status_id,
                success: function (data) {
                    swal('Client status updated Successfull!');
                }
            });
        });

        /**
         * Featured Clients Edit
         */
        $(document).on('click', '.edit_client', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'client/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_client_modal form input[name="id"]').val(data.id);
                    $('#update_client_modal form input[name="title"]').val(data.title);
                    $('#update_client_modal img#client_new_photo_load').attr('src', 'media/clients/' + data.photo);
                    $('#update_client_modal').modal('show');
                }
            });
        });

        /**
         * Featured Clients Update Image Load
         */
        $(document).on('change', '#client_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#client_new_photo_load').attr('src', file_url);
        });

        /**
         * Gallery Image Load
         */
        $(document).on('change', '#gallery_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#gallery_photo_load').attr('src', file_url);
        });

        /**
        * Gallery Switcher
        */
        $(document).on('change', '.gallery_switcher', function (e) {
            e.preventDefault();
            let status_id = $(this).attr('status_id');
            $.ajax({
                url: '/gallery-status-update/' + status_id,
                success: function (data) {
                    swal('Gallery status updated Successfull!');
                }
            });
        });

        /**
         * Gallery Edit
         */
        $(document).on('click', '.edit_gallery', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'gallery/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_gallery_modal form input[name="id"]').val(data.id);
                    $('#update_gallery_modal form input[name="title"]').val(data.title);
                    $('#update_gallery_modal img#gallery_new_photo_load').attr('src', 'media/gallery/' + data.photo);
                    $('#update_gallery_modal').modal('show');
                }
            });
        });

        /**
         * Gallery Update Image Load
         */
        $(document).on('change', '#gallery_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#gallery_new_photo_load').attr('src', file_url);
        });

        /**
         * Top Service Image Load
         */
        $(document).on('change', '#top_service_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#top_service_photo_load').attr('src', file_url);
        });

        /**
         * Image Load
         */
         $(document).on('change', '#topser_piture1', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture1_load').attr('src', file_url);
         });
        $(document).on('change', '#topser_piture2', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture2_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture3', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture3_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture4', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture4_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture5', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture5_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture6', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture6_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture3', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture3_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture4', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture4_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture7', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture7_load').attr('src', file_url);
        });
        $(document).on('change', '#topser_piture8', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#topser_piture8_load').attr('src', file_url);
        });


    });
})(jQuery)
