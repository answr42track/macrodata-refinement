namespace MacrodataRefinement.Domain.Entities;

public class DataChunk
{
    public Guid Id { get; set; }
    public List<int>? Numbers { get; set; }
    public bool IsRefined { get; set; }
}

