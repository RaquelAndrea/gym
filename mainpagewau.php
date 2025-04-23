<!DOCTYPE HTML>
<html>
  <head>
    <style>        
      .menu
      {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
        margin: 20px 0;
      }
      .img-link 
      {
        width: 15%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        min-height: 320px;
        box-sizing: border-box;
      }
      .img-link a 
      {
        text-decoration: none;
        color: #1A3431;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
      }
      .img-link img 
      {
        width: 100%;
        height: 180px;
        object-fit: cover; 
        display: block;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      }
      .link-label 
      {
        margin-top: 10px;
        font-size: 16px;
        font-family: sans-serif;
      }
    </style>
      <link rel="stylesheet" href="master.css">
  </head>

  <body>
    <div class="banner">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT243RYpMJZ7i_O8XB1NJMTlB2ZybjjLCrTVg&s" alt="WAU logo" />
      <h1 >Washington Adventist University Gym</h1>
    </div>

      <img src="https://media-hosting.imagekit.io/9d4fbd7bb45240a9/r.JPG?Expires=1839162994&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=Tvzd6Pk8jDpsL65hxh8dNmM5bsyvnsLHqhN3GTRaNvFRlTf12NGcAvzkyZM5PNBFmfkw9tr61eMPWYrlt8ZHyvOf5io2-YR3I7P6-fQP43ADK9dkxmMDtAkO9LwFIfbjkMQqoN-cUonK~BAVyBklJAd06z9mfK-7BeldZTBAT5~jo6DsNAtPTv14q1BkRnVbo-KpE6C0~hIAIVpi2kk6miAPPMPmjIDh2J0dBWYHfQ~UbNuBTB72UzXvlkv6SRMMBsUeVJVMI2HvXKokUzqDBpyy2WesHm2qYHyhufmOFXrrpdkn3ypZQLuBGtfmtrvi5gb23YTfqdAOV375fIem~A__"  style="width: 100%; height: auto; display: block;" alt="campus">
    
    <div class="menu">
       
      <div class="img-link">
        <a href="student_sign_in.php">
          <img src="https://t4.ftcdn.net/jpg/02/53/82/87/360_F_253828735_ERThbaMpHS9m6OCmItkAVt4YSBkNasWf.jpg" alt="Sign In Symbol">
          <div class="link-label"> Student Sign In</div>
        </a>
      </div>

      <div class="img-link">
        <a href="user_feedback.php">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEX///8aGhoAAAAZGRn8/PwcHBwWFhY4ODjr6+sREREpKSmpqand3d0ODg74+PjDw8O7u7tHR0fV1dUkJCTx8fFSUlKhoaE/Pz9XV1fm5uZaWlpqamo9PT2/v79NTU00NDRiYmKUlJRwcHDOzs5+fn6vr6+Hh4eOjo54eHiRkZEuLi6cnJzIfbcFAAAH70lEQVR4nO2ci1bqOhCG02kSGiSltFUuoiA3Ud7//c5MilAu6hZ6JGbNt9wX15bu/J3Jn0maVAiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYZjfRkohb92G/xdSGLbE9NYN+AXyxTDsICY9GAXbFVNUlk9AwSARQYokFx22bBFH8FjeujH/D1J0eqB0pAqYBimRBNooUiqOFDwmAaapLDGCSmn8FWNfDKwnVsNgV2sUF0eEs5twkCixg3mZaRSoVCUxKLuRKHA8LaXoAiWpUxiW3aDAvnWKssJsFTq7uXXDmiPpG1XYKZpLhlGsBGIU72/drkaggT5vAfU/GFGimkoiumrRvXXjmqCqZCBCB40LGKGpOrvBMVGr7NaNa4aqkiFiXaCBVnaDInUWxlwKU7RvMCd1hC4aUaKS3Wil21koc+FhDwrMSqplYnKXx1SkaDfQFQEsaOxMJtqBdkODxtMkNJPZEWssSXGiGMg8f2cy9RjqaqQPzGTqqEhH8+BMpi4QY9h1Cxp/nDMm85GlwVUyRwrDq2SOFAZYyRwSYiVzKDDYSoZN5o/BJvP3YZP5y7DJ/H3YZG7HyX9+rjUuCEcNrQXGZ5M5kz//cL9l9dvHh302mX1YagH5UqIkjj/tsclQY8skSYbDZEf5PSlRT1KPTaZcLkatsaOPX0Rvy/OWe2T7BzIgRsRstfx4QOadybhMozDkU0Csxa89xmgdayR2RPR3Y+hf4IRxt/TSZKTbQieTlQbUY/binKyIOlSxQ1Xfuj8iJ3YHaZ7OReKfyTivkPkYQ6fNaWD+GautAbt59s9kJG0e6LaBGqhHq+yE5fLukIctG+KlYjFVYOgWGeWdydB/PXT9Dx7zy2+07LwBaLdFxiOTqZqG49cEjIZ2ftVl8GtgT/LTh0oGFc4wwaCXi/TyVHKVzNicJKgflcwTjQ9FR1Tl5qVXob1q6jhBb20yFeU9oOu7ZySX9xZXqkXu4a5PJlPRBWNgLajwusIPkh5tI4mPOuKtTabiEZO0Nbxir67P0yViOMGBYnFFJlHJ4Ot0ydElI+1c0Vmkx9Mlxxs5Kbbk4rZI2oznXyWzZwS2OhVwcWO8my4dgfUkbPbffiP18CgPlbSygyZTT1CaY0WemIzDosK7/bdf3/ajosDdjk7L1sOn3HZKbb0wGQfOCmG5//ZHPacaQtGNi7pC9ByLLupDgjpIYf1+p9lT93Oy5KDlUrzOhStnDmKo3z0xGceRQpmcWZ+okR0p7Kshzp/f7UE/hFcskXwYKBwnMYy1+hx4Ovhwmke2wCiWbeyLapemdeu6PScKTXwyBdrHBxUeZF8Gyo47QuR9iD52bUeR5wqtVvFnHMVQihWOFLaNEslRK4VGW78Vlu9F+1OK4nAQSJ9NhLJbcxr3XV/U722scx9+V8PXHDtNmne+IC8PPDKJC+x+yqgEE5XsRsN8AKTQGyclhRYuHp0zd7ZAKePsZgK6PRf3WEJ4FsMrFL7C1kBty9kNVjKplwqfvv+xs8iBjSpbQrvJUSIW22Ep7LT1tuhGR6Ut6fQIJCiFc6jK0EhTIfTsrUJTVyjTzfEq/qcsR5ZcBtUVs818656o0DsvPVAoyh88jTGFBngfvM2H+2nVNoaeKaxNVmVKWfdFZVpH695dlyrs2tNu7xWKNNIn64LnKtSqiHutPlR7jUd6b31XaCP9aV16iHbTJPcpKWtZ6mE/rCtMeq1/pj95OZFSPtuDZZHbc6xQJD9gmJwoTP1X+IN1xZrB7PgDCn/Qg849rEqfwXOFP3m5kTwTRN8UynNZehXOS+989tJrQS+1PsXwdBXjWpI+Klx+/3O/R4EKXxq8Xqdtmk2KqyFjeGzwernWBjoNXvBqNvQYXzTzQioaPB4o7X0ymuoZ8LyhJuFV+pgTvUYu1hRJy2pYNyKQLtIBE/tlpUKsMK3aDQVRygVYtwbuE3NK01lDaTonn2nSuBogFY+0b++BJnry4kdi5DEyTXEw1NSrvSKV89hqEz9d9b5Nt9M4TWegYuzUPjmpoNv/ArFVaolNvFwhveMqQYEaWok/D0crpKBbr2O7+vFLOPZzCwph3rMFJkMmPFPotupPQEXKjl+Hl18nXyuttOvQnil0lBhFVcQAcHi0wp2peM7FLlQP99Pp447ZbI0skJEFWxTKGq9Wu+uUKxzG3HMyc3qWor1fMX79bKc+3iClYJJ5ZjJ1ugNsZrE9R+FOUnwcvEABy4/hclM7coI/QQdO6FSGe3hh7XroxVa9s6ToN9lifPbABT2Y2GwVLnECrw+jt70Ntreee/wG65QOBgkxnC9f3l5XFdS9FuvFuu1OKlSL2zJDvfFgNt0xqlhvukMabVJvY/gFyZTiBOvSnUsjuQG95LCqxsoBmEqixKmDpfmtr7l4GdhDF6BxikUvH0uoV+ZBKazOwL5i6DTcd0RaLc2FpHC74/QNDM5s35M0dktzYSkUrursuihG3R4qfPNoa2UzOD3LArAvTt7xt1V4L1J3U4h5gVG0JqIDNuEJdLP/vA8x1mgRTANUWG216PTpVfExjPytPq9mRDv1TD+4GO4pFxArPQ7NSuvg2K/UJKAXjB+DwXvAue4Vix0es8vMDJRna9qN0y1CK0xPyJp6VOUraXhF2wn+Lsc0hMcLTgzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzD/EX+A5Yzg69U1yt1AAAAAElFTkSuQmCC" alt="Feedback Symbol">
          <div class="link-label">Feedback Page</div>
        </a>
      </div>

      <div class="img-link">
        <a href="crowd_meter.php">
          <img src="https://www.creativefabrica.com/wp-content/uploads/2021/03/13/group-people-icon-Graphics-9532654-1-312x208.jpg" alt="Crowd Meter Symbol">
          <div class="link-label">Crowd Meter</div>
        </a>
      </div>

      <div class="img-link">
        <a href="schedule.php">
          <img src="https://static.vecteezy.com/system/resources/previews/021/376/423/non_2x/schedule-icon-for-your-website-mobile-presentation-and-logo-design-free-vector.jpg" alt="Schedule Symbol">
          <div class="link-label">Schedule</div>
        </a>
      </div>

      <div class="img-link">
        <a href="main_faq_withcss.php">
          <img src="https://thumbs.dreamstime.com/b/icon-faqs-question-mark-faqs-263880000.jpg" alt="FAQ Symbol">
          <div class="link-label">FAQ</div>
        </a>
      </div>

      <div class="img-link">
        <a href="coach_sign_in.php">
          <img src="https://static.vecteezy.com/system/resources/previews/047/743/855/non_2x/coach-icon-black-line-art-vector.jpg" alt="Coach Symbol">
          <div class="link-label">Coach Sign In</div>
        </a>
      </div>
    </div>
  </body>
</html>
