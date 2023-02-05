/**
 *
 * @type {{request: API.request}}
 */
const API = {
  /**
   * Execute API method.
   *
   * @param method API method name.
   * @param parameters List of parameters.
   * @param success Function for success.
   * @param failure Function for failure.
   * @param complete Function for complete.
   */
  request: function (
      method,
      parameters,
      success,
      failure,
      complete
  ) {

    $.ajax({
      type: 'POST',
      dataType: 'json',
      data: {
        method: method,
        parameters: parameters
      },
      success: function (data) {
        if(typeof(success) === 'function')
        {
          success(data.response, data.debug, data.statistics);
        }
      },
      error: function()
      {
        if(typeof(failure) === 'function')
        {
          failure();
        }
      },
      complete: function () {
        if(typeof(complete) === 'function')
        {
          complete();
        }
      }
    });
  }
};