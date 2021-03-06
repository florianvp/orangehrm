/**
* @api {get} /api/v1/leave/type 1.Leave Types
* @apiName leaveTypes
* @apiGroup Leave
* @apiVersion 0.1.0
*
*
* @apiSuccess {String} [type] Leave type.
* @apiSuccess {Number} [id] Leave id.
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*      {
*        "type": "Annual",
*        "id": "11"
*      }
*
* @apiError No-Records Found.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 404 Record Not Found
*     {
*       "error": ["No Leave Types Available"]
*     }
*/
