<style>
.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}
</style>
<!-- Modal -->
<div class="modal fade" id="bed" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="bedLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bedLabel">IMPORTANT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <lottie-player src="/assets/lottie/data.json" background="transparent" speed="1"
          style="margin: auto; width: 75%;" loop autoplay>
        </lottie-player>
        <h2 class="text-center text-info">For up-to-date data please visit the below link and click on the popup</h2>
        <br />

        <a href="https://ahmedabadcity.gov.in/portal/web?requestType=ApplicationRH&actionVal=loadCoronaRelatedDtls&queryType=Select&screenId=114"
          class="alert-link text-center blink" target="_blank" style="font-size: 2.5rem;"><img
            src="/assets/images/AMC_logo.png" height="80" /><br />AMC Bed Portal</a>
      </div>
      <div class="modal-footer">
        <a href="https://ahmedabadcity.gov.in/portal/web?requestType=ApplicationRH&actionVal=loadCoronaRelatedDtls&queryType=Select&screenId=114"
          class="btn btn-success" target="_blank" data-dismiss="modal"><i class="fas fa-external-link-square-alt"
            style="font-size: 18px;margin-right: 10px;"></i>Open Link</a>
      </div>
    </div>
  </div>
</div>