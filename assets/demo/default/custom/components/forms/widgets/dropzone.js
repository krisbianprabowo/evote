//== Class definition

var DropzoneDemo = function () {    
    //== Private functions
    var demos = function () {
        // single file upload
        var base_url = window.location.origin +"/home/proses_isi_biodata" ;
        Dropzone.options.mDropzoneOne = {
            url:base_url,
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*,application/pdf,.psd",
            accept: function(file, done) {
                    done(); 
            }   
        };

        // multiple file upload
        Dropzone.options.mDropzoneTwo = {
            url:base_url,
            paramName: "file1", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*,application/pdf,.psd",
            accept: function(file, done) {
                    done(); 
               
            }   
        };

        // file type validation
        Dropzone.options.mDropzoneThree = {
            url:base_url,
            paramName: "file2", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*,application/pdf,.psd",
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else { 
                    done(); 

                }
            }   
        };

        Dropzone.options.mDropzoneFour = {
            url:base_url,
            paramName: "file3", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            acceptedFiles: "image/*,application/pdf,.psd",
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else { 
                    done(); 

                }
            }   
        };
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

DropzoneDemo.init();