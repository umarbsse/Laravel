# --- 1. Locate the project directory ----------------------------------------
PROJECT_DIR="/mnt/nvme3n1/PXD-BE/Article-Similarity-Pipeline-Optimized-Deployed-final"
cd "$PROJECT_DIR" || exit 1

# --- 2. Activate virtual environment ---------------------------------------
source venv/bin/activate

# --- 3. Run the pipeline command -------------------------------------------
python run_pipeline.py \
  --use-database \
  --last-24-hours \
  --max-reclassification-workers 8 \
  --skip-file-outputs

# --- 4. Deactivate virtual environment -------------------------------------
deactivate




(venv) us@osig:/mnt/nvme3n1/PXD-BE/Article-Similarity-Pipeline-Optimized-Deployed-final$ python run_pipeline.py --use-database --last-24-hours  --max-reclassification-workers 8 --skip-file-outputs
