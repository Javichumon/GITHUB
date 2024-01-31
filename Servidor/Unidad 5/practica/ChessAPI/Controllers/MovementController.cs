using System.Text.Json;
using ChessAPI.Model;
using Microsoft.AspNetCore.Mvc;

namespace ChessAPI.Controllers;

[ApiController]
[Route("[controller]")]
public class MovementController : ControllerBase
{
    private IBoardService _boardService;

    public MovementController(IBoardService boardService)
    {
        this._boardService = boardService;
    }

    [HttpGet]
    public IActionResult Get(string board)
    {
        try
        {
            if (string.IsNullOrEmpty(board))
            {
            return BadRequest("board no puede ser IsNullOrEmpty");
            }

            var response = _boardService.isValid();

            return Ok(response);
        }   
        catch (Exception ex)
        {
            return StatusCode(StatusCodes.Status500InternalServerError);
        }     
    }
}
