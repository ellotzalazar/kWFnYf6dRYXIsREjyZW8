<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <div class="container">

  <div class="row"> 
            <div class="span3">
            <?php include('sidebar.php'); ?>
            </div>
            <div class="span9">
              <img src="../img/dr.png" class="img-rounded">
                <?php include('navbar_dasboard.php') ?>
              
            
            </div>

  <div class="content">
    
  

<body>
<div class="span6">
	<i>Supported formats : jpg,png,gif,jpeg,mp4;</i>
	<link href="fine_uploader/fine-uploader-new.css" rel="stylesheet" type="text/css"/>
    <!-- The element where Fine Uploader will exist. -->
    <div id="fine-uploader">
    </div>

    <!-- Fine Uploader -->
    <script src="fine_uploader/fine-uploader.min.js" type="text/javascript"></script>

    <script type="text/template" id="qq-template">
        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="hidden">
                    (<span class="qq-upload-size-selector qq-upload-size"></span>)
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>

    <script>
	var fname = '';
        var uploader = new qq.FineUploader({
            debug: true,
            element: document.getElementById('fine-uploader'),
            request: {
                endpoint: 'fine_uploader/file_chunking/endpoint.php'
            },
            deleteFile: {
                enabled: true,
                endpoint: 'fine_uploader/file_chunking/endpoint.php'
            },
            retry: {
               enableAuto: true,
            },
            chunking: {
	            enabled: true,
	            concurrent: {
	                enabled: true
	            },
	            success: {
	                endpoint: 'fine_uploader/file_chunking/endpoint.php?done'
	            }
	        },
	        callbacks:
			{
			    onSubmit: function(id, name) {
			       fname = name;
			    },
			     onAllComplete: function() {
			    	savePortfolioFile(fname);	
			    }
			}
        });

	function savePortfolioFile(filename)
	{
		var ext = filename.split('.').pop();
		var type = 'image';
		if(ext == 'mp4')
		{
			type = 'video';
		}
		$.post('save_portfolio.php',{'type':type,'filename':filename})
			.done(function(result){
				alert('Success');
				window.location = 'upload_portfolio.php';
			});
	}
    </script>

</div>
        
</div>

  </div>
  <div class="cms_body">
 </div>

</body>
</html>



  </div>

    </div>
<?php include('footer.php') ?>