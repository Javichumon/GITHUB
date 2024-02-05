using System.Text.Json;
using ChessAPI.Model;
using Microsoft.AspNetCore.Mvc;

namespace ChessAPI.Controllers;

[ApiController]
[Route("[controller]")]
public class MovementController : ControllerBase
{
    private IBoardMovementService _boardMovementService;

    public MovementController(IBoardMovementService boardMovementService)
    {
        this._boardMovementService = boardMovementService;
    }

    [HttpGet]
    public IActionResult Get(string board, int fromRow, int fromColumn, int toRow,int toColumn)
    {
        try
        {
            if (string.IsNullOrEmpty(board))
            {
            return BadRequest("board no puede ser IsNullOrEmpty");
            }

            var response = _boardMovementService.IsValid(board,fromRow, fromColumn, toRow, toColumn);

            return Ok(response);
        }   
        catch (Exception ex)
        {
            return StatusCode(StatusCodes.Status500InternalServerError);
        }     
    }
}
