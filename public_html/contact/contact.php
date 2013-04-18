<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <!-- <link rel="STYLESHEET" type="text/css" href="../css/app.css" /> -->
      <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.css" />
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
</head>
<body>

        <form id='contactus' action='include/fgcontactform.php' method='post' accept-charset='UTF-8'>
        <fieldset >

        <input type='hidden' name='submitted' id='submitted' value='1'/>
<!--         <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
 -->
        <div class='label label-important'>* required fields</div>

        <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
        <div class='contr'>
            <label for='name' >Your Full Name*: </label><br/>
            <input type='text' name='name' id='name' value="Name" maxlength="50" /><br/>
            <span id='contactus_name_errorloc' class='error'></span>
        </div>
        <div class='contr'>
            <label for='email' >Email Address*:</label><br/>
            <input type='text' name='email' id='email' value='Email Address' maxlength="50" /><br/>
            <span id='contactus_email_errorloc' class='error'></span>
        </div>
        <div class='contr'>
            <label for='phone' >Phone Number*:</label><br/>
            <input type='text' name='phone' id='phone' value='Phone Number' maxlength="50" /><br/>
            <span id='contactus_phone_errorloc' class='error'></span>
        </div>
        <div class='contr'>
            <label for='message' >Message:</label><br/>
            <span id='contactus_message_errorloc' class='error'></span>
            <textarea rows="10" cols="50" name='message' id='message'>Your Message</textarea>
        </div>
<!--         <div class='contr'>
            <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
            <label for='scaptcha' >Enter the code above here:</label>
            <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
            <span id='contactus_scaptcha_errorloc' class='error'></span>
            <div class='short_explanation'>Can't read the image?
            <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
        </div>
 -->

        <div class='contr'>
            <button class="btn btn-primary" type='submit' name='Submit' value='Submit' /> Submit </button>
            <button type="button" class="btn">Cancel</button>
        </div>

        </fieldset>
        </form>

    </body>
    </html>