using FirstWebApi.Models;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace FirstWebApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class WokerController : ControllerBase
    {
        private readonly DataWorkContext context;

        public WokerController(DataWorkContext _context)
        {
            context = _context;
        }

        [HttpGet]
        public IActionResult GetData()
        {
            return Ok(context.Workers.ToList());
        }

        [HttpGet("{id}")]
        public IActionResult GetData(int id)
        {
            return Ok(context.Workers.Find(id));
        }

        [HttpPost]
        public IActionResult PostData(Worker wor) {
            if (context.Workers == null)
            {
                return NotFound();
            }
            else
            {
                context.Workers.Add(wor);
                context.SaveChanges();
                return StatusCode(201);
            }



        }

        [HttpDelete("{id}")]
        public IActionResult DeleteData(int id) {
            var dtl = context.Workers.Find(id);
            if (dtl != null) {
                context.Workers.Remove(dtl);
                context.SaveChanges();
                return StatusCode(201);
            }
            return NotFound();
        }

        [HttpPut("{id}")]
        public IActionResult PutData(int id,  Worker fetchdata)
        {
           var Employee = context.Workers.Find(id);
           Employee.Name = fetchdata.Name;
           Employee.Salary = fetchdata.Salary;
           context.Workers.Update(Employee);
            context.SaveChanges();
            return StatusCode(201);
        }

    }
}
