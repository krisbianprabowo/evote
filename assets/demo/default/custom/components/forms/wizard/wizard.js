//== Class definition
var WizardDemo = function () {
    //== Base elements
    var wizardEl = $('#m_wizard');
    var formEl = $('#m_form');
    var validator;
    var wizard;
    
    //== Private functions
    var initWizard = function () {
        //== Initialize form wizard
        wizard = wizardEl.mWizard({
            startStep: 1
        });

        //== Validation before going to next page
        wizard.on('beforeNext', function(wizard) {
            if (validator.form() !== true) {
                return false;  // don't go to the next step
            }
        })

        //== Change event
        wizard.on('change', function(wizard) {
            mApp.scrollTop();
        });
    }

    var initValidation = function() {
        validator = formEl.validate({
            //== Validate only visible fields
            ignore: ":hidden",

            //== Validation rules
            rules: {
                nama_lengkap: {
                    required: true 
                },
                nama_panggilan: {
                    required: true 
                },jenis_kelamin: {
                    required: true 
                },tempat_lahir: {
                    required: true 
                },tanggal_lahir: {
                    required: true,
                    date: true
                },agama: {
                    required: true 
                },anak_ke: {
                    required: true 
                },jumlah_saudara: {
                    required: true,
                    number: true
                },jumlah_saudara_tiri: {
                    required: true,
                    number: true
                },anak: {
                    required: true 
                },no_kk: {
                    required: true 
                },no_kip: {
                    required: true 
                },alamat: {
                    required: true 
                },no_tlp: {
                    required: true 
                },tinggal_dengan: {
                    required: true 
                },jarak: {
                    required: true 
                },asal_sekolah: {
                    required: true 
                },tahun_lulus: {
                    required: true,
                    number: true
                },no_ijazah: {
                    required: true 
                },lama_belajar: {
                    required: true 
                },nisn: {
                    required: true 
                },nama_lengkap_ayah: {
                    required: true 
                },tanggal_lahir_ayah: {
                    required: true,
                    date: true 
                },tempat_lahir_ayah: {
                    required: true 
                },agama_ayah: {
                    required: true 
                },pendidikan_ayah: {
                    required: true 
                },pekerjaan_ayah: {
                    required: true 
                },penghasilan_ayah: {
                    required: true,
                    number: true
                },alamat_ayah: {
                    required: true 
                },no_tlp_ayah: {
                    required: true 
                },nama_lengkap_ibu: {
                    required: true 
                },tanggal_lahir_ibu: {
                    required: true,
                    date: true 
                },tempat_lahir_ibu: {
                    required: true 
                },agama_ibu: {
                    required: true 
                },pendidikan_ibu: {
                    required: true 
                },pekerjaan_ibu: {
                    required: true 
                },penghasilan_ibu: {
                    required: true,
                    number: true
                },no_tlp_ibu: {
                    required: true 
                },alamat_ibu: {
                    required: true 
                },nama_lengkap_wali: {
                    required: true 
                },tanggal_lahir_wali: {
                    required: true,
                    date: true 
                },tempat_lahir_wali: {
                    required: true 
                },agama_wali: {
                    required: true 
                },pendidikan_wali: {
                    required: true 
                },pekerjaan_wali: {
                    required: true 
                },penghasilan_wali: {
                    required: true,
                    number: true
                },alamat_wali: {
                    required: true 
                },no_tlp_wali: {
                    required: true 
                },hobi_siswa: {
                    required: true 
                },nilai_UN: {
                    required: true,
                    min: 0,
                    max: 100
                },sem1_agama: {
                    required: true,
                    min: 0,
                    max: 100
                },sem1_b_indonesia: {
                    required: true,
                    min: 0,
                    max: 100
                },sem1_b_inggris: {
                    required: true,
                    min: 0,
                    max: 100
                },sem1_matematika: {
                    required: true,
                    min: 0,
                    max: 100
                },sem1_pkn: {
                    required: true,
                    min: 0,
                    max: 100
                },sem3_agama: {
                    required: true,
                    min: 0,
                    max: 100
                },sem3_b_indonesia: {
                    required: true,
                    min: 0,
                    max: 100
                },sem3_b_inggris: {
                    required: true,
                    min: 0,
                    max: 100
                },sem3_matematika: {
                    required: true,
                    min: 0,
                    max: 100
                },sem3_pkn: {
                    required: true,
                    min: 0,
                    max: 100
                },sem5_agama: {
                    required: true,
                    min: 0,
                    max: 100
                },sem5_b_indonesia: {
                    required: true,
                    min: 0,
                    max: 100
                },sem5_b_inggris: {
                    required: true,
                    min: 0,
                    max: 100
                },sem5_matematika: {
                    required: true,
                    min: 0,
                    max: 100
                },sem5_pkn: {
                    required: true,
                    min: 0,
                    max: 100
                }
            },

            //== Validation messages
            messages: {
                'account_communication[]': {
                    required: 'You must select at least one communication option'
                },
                accept: {
                    required: "You must accept the Terms and Conditions agreement!"
                } 
            },
            
            //== Display error  
            invalidHandler: function(event, validator) {     
                mApp.scrollTop();

                swal({
                    "title": "", 
                    "text": "Terdapat beberapa kesalahan ketika anda mengisi formulir biodata. Harap diperbaiki", 
                    "type": "error",
                    "confirmButtonClass": "btn btn-danger m-btn m-btn--wide"
                });
            },

            //== Submit valid form
            submitHandler: function (form) {
                
            }
        });   
    }

    var initSubmit = function() {
        var base_url = window.location.origin +"/home/proses_isi_biodata" ;
        var cetak_url= window.location.origin +"/home/pilihpembayaran"
        var btn = formEl.find('[data-wizard-action="submit"]');

        btn.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {
                //== See: src\js\framework\base\app.js
                mApp.progress(btn);
                //mApp.block(formEl); 

                //== See: http://malsup.com/jquery/form/#ajaxSubmit
                /*formEl.ajaxSubmit({
                    type    : 'post',
                    url     : 'http://ppdb.localhost.com/home/proses_isi_biodata',
                    data    : $("form").serialize(),
                    success: function() {
                        mApp.unprogress(btn);
                        //mApp.unblock(formEl);

                        swal({
                            "title": "", 
                            "text": "The application has been  submitted!", 
                            "type": "success",
                            "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                        });

                        window.location.replace(base_url);
                    }
                });*/
                $.ajax({
                url  : base_url,
                type : 'POST',
                data : $("form").serialize(),
                success:function(html){
                    mApp.unprogress(btn);
                        //mApp.unblock(formEl);

                        swal({
                            "title": "", 
                            "text": "Formulir Biodata Anda Telah Berhasil Dikirim!", 
                            "type": "success",
                            "confirmButtonClass": "btn btn-info m-btn m-btn--wide"
                        });

                        console.log($("form").serialize());
                        window.setTimeout(function(){
                            window.location.replace(base_url);
                        }, 1500);
                }
            });
            }
        });
    }

    return {
        // public functions
        init: function() {
            wizardEl = $('#m_wizard');
            formEl = $('#m_form');

            initWizard(); 
            initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function() {    
    WizardDemo.init();
});