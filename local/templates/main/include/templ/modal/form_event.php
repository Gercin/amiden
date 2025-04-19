<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) { die(); } ?>
<div class="popup-form" style="display: none; width: 50%;" id="modal_form_event">
	<div class="form-block">
		<div class="form-block__wr">
			<div class="form-block__info">
				<div class="form-block__subtitle">
					Присоединяйтесь к&nbsp;нам
				</div>
				<div class="form-block__title page-sec__title">
					Оставьте заявку, и мы свяжемся с&nbsp;вами
				</div>
				<div class="form-block__text">
					Профессиональная медицинская некоммерческая организация медицинская некоммерческая организация
				</div>
			</div>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] .'/local/templates/main/include/forms/form_event.php';?>
		</div>
	</div>
	<script>
		function formAreaInit() {
		    $("input.with-label").each(function () {
		        if ($(this).val().length) {
		            $(this).siblings("label").addClass("active");
		            $(this).addClass("active");
		        }
		    })
		
		    $("input.with-label").blur(function (evt) {
		        if ($(this).val().length == 0) {
		            $(this).siblings("label").removeClass("active");
		            $(this).removeClass("active");
		        }
		    });
		
		    $("input.with-label").focus(function (evt) {
		        $(this).siblings("label").addClass("active");
		        $(this).addClass("active");
		
		    });
		
		    $("textarea.with-label").each(function () {
		        if ($(this).val().length) {
		            $(this).siblings("label").addClass("active");
		            $(this).addClass("active");
		        }
		    })
		
	
		    $(document).on('blur', 'textarea.with-label', function (evt) {
		        if ($(this).val().length == 0) {
		            $(this).siblings("label").removeClass("active");
		            $(this).removeClass("active");
		        }
		    });
		
		  
		    $(document).on('focus', 'textarea.with-label', function (evt) {
		        $(this).siblings("label").addClass("active");
		        $(this).addClass("active");
		
		        var element = $(this);
		        var l = element.val().length;
		        element[0].setSelectionRange(l, l);
		
		    });
		
		}
		formAreaInit();
		phoneMasked();
	</script>
</div>