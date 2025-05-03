using MacrodataRefinement.Domain.Entities;
using Microsoft.EntityFrameworkCore;

namespace MacrodataRefinement.Infrastructure.Data
{
    public class AppDbContext(DbContextOptions<AppDbContext> options) : DbContext(options)
    {
        public DbSet<DataChunk> DataChunks => Set<DataChunk>();

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);
            // Apply configurations here (e.g., modelBuilder.Entity<...>)
        }
    }
}
