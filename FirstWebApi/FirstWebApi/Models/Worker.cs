using System;
using System.Collections.Generic;

namespace FirstWebApi.Models;

public partial class Worker
{
    public int Id { get; set; }

    public string? Name { get; set; }

    public int? Salary { get; set; }
}
