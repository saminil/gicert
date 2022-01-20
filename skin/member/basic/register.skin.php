<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입약관 동의 시작 { -->
<div class="register">

    <form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

    <p><i class="fa fa-check-circle" aria-hidden="true"></i> You must agree to the terms and conditions of membership and privacy policy to register as a member.</p>
    
    <?php
    // 소셜로그인 사용시 소셜로그인 버튼
    @include_once(get_social_skin_path().'/social_register.skin.php');
    ?>
    <section id="fregister_term">
        <h2>Membership Agreement</h2>
        <textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
        <fieldset class="fregister_agree">
            <input type="checkbox" name="agree" value="1" id="agree11" class="selec_chk">
            <label for="agree11"><span></span><b class="sound_only">I agree to the terms and conditions of membership.</b></label>
        </fieldset>
    </section>

    <section id="fregister_private">
        <h2>Privacy Policy Guide</h2>
        <div>
            <table>
                <caption>Privacy Policy Guide</caption>
                <thead>
                <tr>
                    <th>Purpose</th>
                    <th>Item</th>
                    <th>Retention period</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>User identification and identification</td>
                    <td>ID, Name, Password</td>
                    <td>Until membership withdrawal</td>
                </tr>
                <tr>
                    <td>Notification on the use of customer service,<br>User identification for CS response</td>
                    <td>Contact (e-mail, mobile phone number)</td>
                    <td>Until membership withdrawal</td>
                </tr>
                </tbody>
            </table>
        </div>

        <fieldset class="fregister_agree">
            <input type="checkbox" name="agree2" value="1" id="agree21" class="selec_chk">
            <label for="agree21"><span></span><b class="sound_only">I agree to the contents of the Privacy Policy Guide.</b></label>
       </fieldset>
    </section>
	
	<div id="fregister_chkall" class="chk_all fregister_agree">
        <input type="checkbox" name="chk_all" id="chk_all" class="selec_chk">
        <label for="chk_all"><span></span>I agree to all terms and conditions</label>
    </div>
	    
    <div class="btn_confirm">
    	<a href="<?php echo G5_URL ?>" class="btn_close">Cancel</a>
        <button type="submit" class="btn_submit">Sign Up</button>
    </div>

    </form>

    <script>
    function fregister_submit(f)
    {
        if (!f.agree.checked) {
            alert("You must agree to the terms and conditions to sign up for membership.");
            f.agree.focus();
            return false;
        }

        if (!f.agree2.checked) {
            alert("You must agree to the contents of the personal information processing policy to register as a member.");
            f.agree2.focus();
            return false;
        }

        return true;
    }
    
    jQuery(function($){
        // 모두선택
        $("input[name=chk_all]").click(function() {
            if ($(this).prop('checked')) {
                $("input[name^=agree]").prop('checked', true);
            } else {
                $("input[name^=agree]").prop("checked", false);
            }
        });
    });

    </script>
</div>
<!-- } 회원가입 약관 동의 끝 -->
